<?php
namespace Opencart\System\Library\Cart;

class Cart {
	private object $db;
	private object $config;
	private object $customer;
	private object $session;
	private object $tax;
	private object $weight;
	private \Opencart\System\Engine\Registry $registry;
	private array $data = [];

	public function __construct(\Opencart\System\Engine\Registry $registry) {
		$this->db = $registry->get('db');
		$this->config = $registry->get('config');
		$this->customer = $registry->get('customer');
		$this->session = $registry->get('session');
		$this->tax = $registry->get('tax');
		$this->weight = $registry->get('weight');
		$this->registry = $registry;

		$session_expire = (int)$this->config->get('config_session_expire');
		if ($session_expire > 0) {
			$this->db->query("DELETE FROM `" . DB_PREFIX . "cart` WHERE `store_id` = '" . (int)$this->config->get('config_store_id') . "' AND `customer_id` = '0' AND `date_added` < DATE_SUB(NOW(), INTERVAL " . $session_expire . " SECOND)");
		}

		if ($this->customer->isLogged()) {
			$this->db->query("UPDATE `" . DB_PREFIX . "cart` SET `session_id` = '" . $this->db->escape($this->session->getId()) . "', `date_added` = NOW() WHERE `store_id` = '" . (int)$this->config->get('config_store_id') . "' AND `customer_id` = '" . (int)$this->customer->getId() . "'");

			$this->db->query("UPDATE `" . DB_PREFIX . "cart` SET `customer_id` = '" . (int)$this->customer->getId() . "', `date_added` = NOW() WHERE `store_id` = '" . (int)$this->config->get('config_store_id') . "' AND `customer_id` = '0' AND `session_id` = '" . $this->db->escape($this->session->getId()) . "'");
		}
	}
    
	public function getProducts(): array {
		if (!$this->data) {
			$session_id = $this->session->getId();
			$customer_id = $this->customer->getId();
			$store_id = (int)$this->config->get('config_store_id');
			
			if (empty($session_id)) {
				return [];
			}
			
			$cart_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "cart` WHERE `store_id` = '" . $store_id . "' AND `customer_id` = '" . (int)$customer_id . "' AND `session_id` = '" . $this->db->escape($session_id) . "'");
			
			if ($cart_query->num_rows == 0) {
				$cart_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "cart` WHERE `customer_id` = '" . (int)$customer_id . "' AND `session_id` = '" . $this->db->escape($session_id) . "'");
			}

			foreach ($cart_query->rows as $cart) {
				$stock_status = true;

				$cart_store_id = isset($cart['store_id']) ? (int)$cart['store_id'] : (int)$this->config->get('config_store_id');
				$language_id = (int)$this->config->get('config_language_id');
				
				$product_query = $this->db->query("SELECT `p`.*, `pd`.`name`, `pd`.`description`, `pd`.`tag`, `pd`.`meta_title`, `pd`.`meta_description`, `pd`.`meta_keyword`, `p2s`.`store_id` FROM `" . DB_PREFIX . "product` `p` LEFT JOIN `" . DB_PREFIX . "product_description` `pd` ON (`p`.`product_id` = `pd`.`product_id` AND `pd`.`language_id` = '" . $language_id . "') LEFT JOIN `" . DB_PREFIX . "product_to_store` `p2s` ON (`p`.`product_id` = `p2s`.`product_id` AND (`p2s`.`store_id` = '" . $cart_store_id . "' OR `p2s`.`store_id` = '0')) WHERE `p`.`product_id` = '" . (int)$cart['product_id'] . "' AND `p`.`date_available` <= NOW() AND `p`.`status` = '1' LIMIT 1");

				if ($product_query->num_rows && ($cart['quantity'] > 0)) {
					$stock = $product_query->row['quantity'];

					$option_price = 0;
					$option_points = 0;
					$option_weight = 0;

					$option_data = [];

					$product_options = (array)json_decode($cart['option'], true);

					$variant = json_decode($product_query->row['variant'], true);

					if ($variant) {
						foreach ($variant as $key => $value) {
							$product_options[$key] = $value;
						}
					}

					if (!$product_query->row['master_id']) {
						$product_id = $cart['product_id'];
					} else {
						$product_id = $product_query->row['master_id'];
					}

					foreach ($product_options as $product_option_id => $value) {
						$option_query = $this->db->query("SELECT `po`.`product_option_id`, `po`.`option_id`, `od`.`name`, `o`.`type` FROM `" . DB_PREFIX . "product_option` `po` LEFT JOIN `" . DB_PREFIX . "option` `o` ON (`po`.`option_id` = `o`.`option_id`) LEFT JOIN `" . DB_PREFIX . "option_description` `od` ON (`o`.`option_id` = `od`.`option_id`) WHERE `po`.`product_option_id` = '" . (int)$product_option_id . "' AND `po`.`product_id` = '" . (int)$product_id . "' AND `od`.`language_id` = '" . (int)$this->config->get('config_language_id') . "'");

						if ($option_query->num_rows) {
							if ($option_query->row['type'] == 'select' || $option_query->row['type'] == 'radio') {
								$option_value_query = $this->db->query("SELECT `pov`.`option_value_id`, `ovd`.`name`, `pov`.`quantity`, `pov`.`subtract`, `pov`.`price`, `pov`.`price_prefix`, `pov`.`points`, `pov`.`points_prefix`, `pov`.`weight`, `pov`.`weight_prefix` FROM `" . DB_PREFIX . "product_option_value` `pov` LEFT JOIN `" . DB_PREFIX . "option_value` `ov` ON (`pov`.`option_value_id` = `ov`.`option_value_id`) LEFT JOIN `" . DB_PREFIX . "option_value_description` `ovd` ON (`ov`.`option_value_id` = `ovd`.`option_value_id`) WHERE `pov`.`product_option_value_id` = '" . (int)$value . "' AND `pov`.`product_option_id` = '" . (int)$product_option_id . "' AND `ovd`.`language_id` = '" . (int)$this->config->get('config_language_id') . "'");

								if ($option_value_query->num_rows) {
									if ($option_value_query->row['price_prefix'] == '+') {
										$option_price += $option_value_query->row['price'];
									} elseif ($option_value_query->row['price_prefix'] == '-') {
										$option_price -= $option_value_query->row['price'];
									}

									if ($option_value_query->row['points_prefix'] == '+') {
										$option_points += $option_value_query->row['points'];
									} elseif ($option_value_query->row['points_prefix'] == '-') {
										$option_points -= $option_value_query->row['points'];
									}

									if ($option_value_query->row['weight_prefix'] == '+') {
										$option_weight += $option_value_query->row['weight'];
									} elseif ($option_value_query->row['weight_prefix'] == '-') {
										$option_weight -= $option_value_query->row['weight'];
									}

									if ($option_value_query->row['subtract'] && (!$option_value_query->row['quantity'] || ($option_value_query->row['quantity'] < $cart['quantity']))) {
										$stock_status = false;
									}

									$option_data[] = [
										'product_option_id'       => $product_option_id,
										'product_option_value_id' => $value,
										'value'                   => $option_value_query->row['name']
									] + $option_query->row + $option_value_query->row;
								}
							} elseif ($option_query->row['type'] == 'checkbox' && is_array($value)) {
								foreach ($value as $product_option_value_id) {
									$option_value_query = $this->db->query("SELECT `pov`.`option_value_id`, `pov`.`quantity`, `pov`.`subtract`, `pov`.`price`, `pov`.`price_prefix`, `pov`.`points`, `pov`.`points_prefix`, `pov`.`weight`, `pov`.`weight_prefix`, `ovd`.`name` FROM `" . DB_PREFIX . "product_option_value` `pov` LEFT JOIN `" . DB_PREFIX . "option_value_description` `ovd` ON (`pov`.`option_value_id` = `ovd`.option_value_id) WHERE `pov`.product_option_value_id = '" . (int)$product_option_value_id . "' AND `pov`.product_option_id = '" . (int)$product_option_id . "' AND `ovd`.language_id = '" . (int)$this->config->get('config_language_id') . "'");

									if ($option_value_query->num_rows) {
										if ($option_value_query->row['price_prefix'] == '+') {
											$option_price += $option_value_query->row['price'];
										} elseif ($option_value_query->row['price_prefix'] == '-') {
											$option_price -= $option_value_query->row['price'];
										}

										if ($option_value_query->row['points_prefix'] == '+') {
											$option_points += $option_value_query->row['points'];
										} elseif ($option_value_query->row['points_prefix'] == '-') {
											$option_points -= $option_value_query->row['points'];
										}

										if ($option_value_query->row['weight_prefix'] == '+') {
											$option_weight += $option_value_query->row['weight'];
										} elseif ($option_value_query->row['weight_prefix'] == '-') {
											$option_weight -= $option_value_query->row['weight'];
										}

										if ($option_value_query->row['subtract'] && (!$option_value_query->row['quantity'] || ($option_value_query->row['quantity'] < $cart['quantity']))) {
											$stock_status = false;
										}

										$option_data[] = [
											'product_option_id'       => $product_option_id,
											'product_option_value_id' => $product_option_value_id,
											'value'                   => $option_value_query->row['name']
										] + $option_query->row + $option_value_query->row;
									}
								}
							} elseif ($option_query->row['type'] == 'text' || $option_query->row['type'] == 'textarea' || $option_query->row['type'] == 'file' || $option_query->row['type'] == 'date' || $option_query->row['type'] == 'datetime' || $option_query->row['type'] == 'time') {
								$option_data[] = [
									'product_option_id'       => $product_option_id,
									'product_option_value_id' => 0,
									'option_value_id'         => 0,
									'value'                   => $value,
									'quantity'                => 0,
									'subtract'                => 0,
									'price'                   => 0,
									'price_prefix'            => '',
									'points'                  => 0,
									'points_prefix'           => '',
									'weight'                  => 0,
									'weight_prefix'           => ''
								] + $option_query->row;
							}
						}
					}

					$product_total = 0;

					foreach ($cart_query->rows as $cart_2) {
						if ($cart_2['product_id'] == $cart['product_id']) {
							$product_total += $cart_2['quantity'];
						}
					}

					$base_price = isset($product_query->row['price']) ? (float)$product_query->row['price'] : 0;
					$price = $base_price + $option_price;

					$subscription_data = [];

					$subscription_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "product_subscription` `ps` LEFT JOIN `" . DB_PREFIX . "subscription_plan` `sp` ON (`ps`.`subscription_plan_id` = `sp`.`subscription_plan_id`) LEFT JOIN `" . DB_PREFIX . "subscription_plan_description` `spd` ON (`sp`.`subscription_plan_id` = `spd`.`subscription_plan_id`) WHERE `ps`.`product_id` = '" . (int)$cart['product_id'] . "' AND `ps`.`subscription_plan_id` = '" . (int)$cart['subscription_plan_id'] . "' AND `ps`.`customer_group_id` = '" . (int)$this->config->get('config_customer_group_id') . "' AND `spd`.`language_id` = '" . (int)$this->config->get('config_language_id') . "' AND `sp`.`status` = '1'");

					if ($subscription_query->num_rows) {
						$subscription_data = ['remaining' => $subscription_query->row['duration']] + $subscription_query->row;

						$price = $subscription_query->row['price'];

						if ($subscription_query->row['trial_status']) {
							$price = $subscription_query->row['trial_price'];
						}
					}

					$product_discount_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "product_discount` WHERE `product_id` = '" . (int)$cart['product_id'] . "' AND `customer_group_id` = '" . (int)$this->config->get('config_customer_group_id') . "' AND `quantity` <= '" . (int)$product_total . "' AND ((`date_start` = '0000-00-00' OR `date_start` < NOW()) AND (`date_end` = '0000-00-00' OR `date_end` > NOW())) ORDER BY `quantity` DESC, `priority` ASC, `price` ASC LIMIT 1");

					if ($product_discount_query->num_rows) {
						if ($product_discount_query->row['type'] == 'F') {
							$price = $product_discount_query->row['price'] + $option_price;
						} elseif ($product_discount_query->row['type'] == 'P') {
							$price -= ($price * ($product_discount_query->row['price'] / 100));
						} elseif ($product_discount_query->row['type'] == 'S') {
							$price -= $product_discount_query->row['price'];
						}
					}

					if (!$product_query->row['quantity'] || ($product_query->row['quantity'] < $product_total)) {
						$stock_status = false;
					}

					if ($product_query->row['minimum'] > $product_total) {
						$minimum = false;
					} else {
						$minimum = true;
					}

					$product_reward_query = $this->db->query("SELECT `points` FROM `" . DB_PREFIX . "product_reward` WHERE `product_id` = '" . (int)$cart['product_id'] . "' AND `customer_group_id` = '" . (int)$this->config->get('config_customer_group_id') . "'");

					if ($product_reward_query->num_rows) {
						$reward = $product_reward_query->row['points'];
					} else {
						$reward = 0;
					}

					$download_data = [];

					$download_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "product_to_download` `p2d` LEFT JOIN `" . DB_PREFIX . "download` `d` ON (`p2d`.`download_id` = `d`.`download_id`) LEFT JOIN `" . DB_PREFIX . "download_description` `dd` ON (`d`.`download_id` = `dd`.`download_id`) WHERE `p2d`.`product_id` = '" . (int)$cart['product_id'] . "' AND `dd`.`language_id` = '" . (int)$this->config->get('config_language_id') . "'");

					foreach ($download_query->rows as $download) {
						$download_data[] = $download;
					}

					$product_data = [
						'cart_id'        => $cart['cart_id'],
						'product_id'     => (int)$cart['product_id'],
						'option'         => $option_data,
						'subscription'   => $subscription_data,
						'download'       => $download_data,
						'quantity'       => (int)$cart['quantity'],
						'minimum_status' => $minimum,
						'stock'          => $stock,
						'stock_status'   => $stock_status,
						'price'          => (float)$price,
						'total'          => (float)($price * $cart['quantity']),
						'reward'         => $reward * $cart['quantity'],
						'points'         => isset($product_query->row['points']) && $product_query->row['points'] ? ($product_query->row['points'] + $option_points) * $cart['quantity'] : 0,
						'weight'         => ((isset($product_query->row['weight']) ? (float)$product_query->row['weight'] : 0) + $option_weight) * $cart['quantity'],
					];
					
					if (isset($product_query->row['name'])) $product_data['name'] = $product_query->row['name'];
					if (isset($product_query->row['model'])) $product_data['model'] = $product_query->row['model'];
					if (isset($product_query->row['image'])) $product_data['image'] = $product_query->row['image'];
					if (isset($product_query->row['minimum'])) $product_data['minimum'] = (int)$product_query->row['minimum'];
					if (isset($product_query->row['subtract'])) $product_data['subtract'] = (int)$product_query->row['subtract'];
					
					$this->data[$cart['cart_id']] = $product_data;

					if ($cart['override']) {
						$override = json_decode($cart['override']);
					} else {
						$override = [];
					}

					foreach ($override as $key => $value) {
						$this->data[$cart['cart_id']][$key] = $value;
					}
				} else {
					$this->remove($cart['cart_id']);
				}
			}
		}

		return $this->data;
	}

	public function add(int $product_id, int $quantity = 1, array $option = [], int $subscription_plan_id = 0, array $override = []): void {
		$session_id = $this->session->getId();
		$customer_id = $this->customer->getId();
		$store_id = (int)$this->config->get('config_store_id');

		if (empty($session_id)) {
			return;
		}
		
		$option_json = json_encode($option);
		$override_json = json_encode($override);

		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "cart` WHERE `store_id` = '" . $store_id . "' AND `customer_id` = '" . (int)$customer_id . "' AND `session_id` = '" . $this->db->escape($session_id) . "' AND `product_id` = '" . (int)$product_id . "' AND `subscription_plan_id` = '" . (int)$subscription_plan_id . "' AND `option` = '" . $this->db->escape($option_json) . "'");

		if (!$query->row['total']) {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "cart` SET `store_id` = '" . $store_id . "', `customer_id` = '" . (int)$customer_id . "', `session_id` = '" . $this->db->escape($session_id) . "', `product_id` = '" . (int)$product_id . "', `subscription_plan_id` = '" . (int)$subscription_plan_id . "', `option` = '" . $this->db->escape($option_json) . "', `quantity` = '" . (int)$quantity . "', `override` = '" . $this->db->escape($override_json) . "', `date_added` = NOW()");
		} else {
			$this->db->query("UPDATE `" . DB_PREFIX . "cart` SET `quantity` = (`quantity` + " . (int)$quantity . ") WHERE `store_id` = '" . $store_id . "' AND `customer_id` = '" . (int)$customer_id . "' AND `session_id` = '" . $this->db->escape($session_id) . "' AND `product_id` = '" . (int)$product_id . "' AND `subscription_plan_id` = '" . (int)$subscription_plan_id . "' AND `option` = '" . $this->db->escape($option_json) . "'");
		}

		$this->data = [];
	}

	public function update(int $cart_id, int $quantity): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "cart` SET `quantity` = '" . (int)$quantity . "' WHERE `cart_id` = '" . (int)$cart_id . "' AND `store_id` = '" . (int)$this->config->get('config_store_id') . "' AND `customer_id` = '" . (int)$this->customer->getId() . "' AND `session_id` = '" . $this->db->escape($this->session->getId()) . "'");

		$this->data = [];
	}

	public function has(int $cart_id): bool {
		return isset($this->data[$cart_id]);
	}

	public function remove(int $cart_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "cart` WHERE `cart_id` = '" . (int)$cart_id . "' AND `store_id` = '" . (int)$this->config->get('config_store_id') . "' AND `customer_id` = '" . (int)$this->customer->getId() . "' AND `session_id` = '" . $this->db->escape($this->session->getId()) . "'");

		unset($this->data[$cart_id]);
	}

	public function clear(): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "cart` WHERE `store_id` = '" . (int)$this->config->get('config_store_id') . "' AND `customer_id` = '" . (int)$this->customer->getId() . "' AND `session_id` = '" . $this->db->escape($this->session->getId()) . "'");

		$this->data = [];
	}

	public function getSubscriptions(): array {
		$product_data = [];

		foreach ($this->getProducts() as $value) {
			if ($value['subscription']) {
				$product_data[] = $value;
			}
		}

		return $product_data;
	}

	public function getWeight(): float {
		$weight = 0;

		foreach ($this->getProducts() as $product) {
			if ($product['shipping']) {
				$weight += $this->weight->convert($product['weight'], $product['weight_class_id'], $this->config->get('config_weight_class_id'));
			}
		}

		return $weight;
	}

	public function getSubTotal(): float {
		$total = 0;

		foreach ($this->getProducts() as $product) {
			$total += $product['total'];
		}

		return $total;
	}

	public function getTaxes(): array {
		$tax_data = [];

		foreach ($this->getProducts() as $product) {
			if ($product['tax_class_id']) {
				$tax_rates = $this->tax->getRates($product['price'], $product['tax_class_id']);

				foreach ($tax_rates as $tax_rate) {
					if (!isset($tax_data[$tax_rate['tax_rate_id']])) {
						$tax_data[$tax_rate['tax_rate_id']] = ($tax_rate['amount'] * $product['quantity']);
					} else {
						$tax_data[$tax_rate['tax_rate_id']] += ($tax_rate['amount'] * $product['quantity']);
					}
				}
			}
		}

		return $tax_data;
	}

	public function getTotal(): float {
		$total = 0;

		foreach ($this->getProducts() as $product) {
			$total += $this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')) * $product['quantity'];
		}

		return $total;
	}

	public function countProducts(): int {
		$product_total = 0;

		$products = $this->getProducts();

		foreach ($products as $product) {
			$product_total += $product['quantity'];
		}

		return $product_total;
	}

	public function hasProducts(): bool {
		return (bool)count($this->getProducts());
	}

	public function hasSubscription(): bool {
		return (bool)count($this->getSubscriptions());
	}

	public function hasStock(): bool {
		foreach ($this->getProducts() as $product) {
			if (!$product['stock_status']) {
				return false;
			}
		}

		return true;
	}

	public function hasMinimum() {
		foreach ($this->getProducts() as $product) {
			if (!$product['minimum_status']) {
				return false;
			}
		}

		return true;
	}

	public function hasShipping(): bool {
		foreach ($this->getProducts() as $product) {
			if ($product['shipping']) {
				return true;
			}
		}

		return false;
	}

	public function hasDownload(): bool {
		foreach ($this->getProducts() as $product) {
			if ($product['download']) {
				return true;
			}
		}

		return false;
	}
}
