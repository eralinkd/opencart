<?php
namespace Opencart\Catalog\Controller\Cart;

class Cart extends \Opencart\System\Engine\Controller {

	protected function formatPrice(float $price, ?object $currency, string $currency_code): string {
		return number_format($price, 2);
	}

	public function index(): void {
		$this->load->language('checkout/cart');
		
		$this->document->setTitle('Cart | SkyFix');

		$data = [];
		$data['server'] = HTTP_SERVER;

		$cart_products = $this->cart->getProducts();
		$cart_items = [];
		$subtotal = 0;
		$total_items = 0;

		$currency_code = $this->config->get('config_currency');
		if ($this->registry->has('session')) {
			$session = $this->registry->get('session');
			if (!empty($session->data['currency'])) {
				$currency_code = $session->data['currency'];
			}
		}

		$currency = $this->registry->has('currency') ? $this->registry->get('currency') : null;

		foreach ($cart_products as $cart_product) {
			$product_price = isset($cart_product['price']) ? (float)$cart_product['price'] : 0;
			$product_quantity = isset($cart_product['quantity']) ? (int)$cart_product['quantity'] : 0;
			$product_total = $product_price * $product_quantity;
			$subtotal += $product_total;
			$total_items += $product_quantity;

			$image = isset($cart_product['image']) && $cart_product['image'] ? $cart_product['image'] : 'catalog/products/controller-default.png';
			$image_url = rtrim(HTTP_SERVER, '/') . '/image/' . ltrim($image, '/');

			$price_formatted = $this->formatPrice($product_price, $currency, $currency_code);
			$total_formatted = $this->formatPrice($product_total, $currency, $currency_code);

			$cart_id = isset($cart_product['cart_id']) ? (int)$cart_product['cart_id'] : 0;
			
			$cart_items[] = [
				'cart_id'        => $cart_id,
				'product_id'     => isset($cart_product['product_id']) ? (int)$cart_product['product_id'] : 0,
				'name'           => isset($cart_product['name']) ? $cart_product['name'] : '',
				'model'          => isset($cart_product['model']) ? $cart_product['model'] : '',
				'image'          => $image_url,
				'quantity'       => $product_quantity,
				'price'          => $product_price,
				'price_formatted' => $price_formatted,
				'total'          => $product_total,
				'total_formatted' => $total_formatted,
				'stock_status'   => isset($cart_product['stock_status']) ? $cart_product['stock_status'] : false
			];
		}

		$data['cart_items'] = $cart_items;
		$data['cart_count'] = count($cart_items);
		$data['total_items'] = $total_items;
		$data['subtotal'] = (float)$subtotal;
		$data['subtotal_formatted'] = $this->formatPrice((float)$subtotal, $currency, $currency_code);
		$data['discount_formatted'] = $this->formatPrice(0, $currency, $currency_code);
		$data['discount'] = 0;
		$data['total'] = (float)$subtotal;
		$data['total_formatted'] = $data['subtotal_formatted'];

		$this->document->addScript('catalog/view/javascript/components/CartItem.js');
		$data['CartItem'] = $this->load->view('common/components/CartItem', $data);

		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$data['url_checkout_new'] = $this->url->link('checkout/new_customer');
		$data['url_cart_add'] = $this->url->link('cart/cart.add', '', true);
		$data['url_cart_update'] = $this->url->link('cart/cart.update', '', true);
		$data['url_cart_remove'] = $this->url->link('cart/cart.remove', '', true);
		$data['url_cart_get'] = $this->url->link('cart/cart.get', '', true);

		$this->response->setOutput($this->load->view('cart/cart', $data));
	}

	public function add(): void {
		$this->load->language('checkout/cart');

		if (!$this->language->get('error_product')) {
			$this->language->set('error_product', 'Product not found!');
		}
		if (!$this->language->get('error_minimum')) {
			$this->language->set('error_minimum', 'Minimum quantity for %s is %s!');
		}
		if (!$this->language->get('error_quantity')) {
			$this->language->set('error_quantity', 'Not enough stock for %s!');
		}
		if (!$this->language->get('text_success')) {
			$this->language->set('text_success', 'Success: You have added <a href="%s">%s</a> to your <a href="%s">shopping cart</a>!');
		}

		$json = [];

		if (isset($this->request->post['product_id'])) {
			$product_id = (int)$this->request->post['product_id'];
		} else {
			$product_id = 0;
		}

		if (isset($this->request->post['quantity'])) {
			$quantity = (int)$this->request->post['quantity'];
		} else {
			$quantity = 1;
		}

		if (!$product_id) {
			$json['error'] = $this->language->get('error_product');
		}

		if (!$json) {
			$language_id = (int)$this->config->get('config_language_id') ?: 1;
			$store_id = (int)$this->config->get('config_store_id');

			$query = $this->db->query("
				SELECT DISTINCT p.*, pd.name, pd.description
				FROM `" . DB_PREFIX . "product` p
				LEFT JOIN `" . DB_PREFIX . "product_description` pd ON (p.product_id = pd.product_id AND pd.language_id = '" . (int)$language_id . "')
				LEFT JOIN `" . DB_PREFIX . "product_to_store` pts ON (p.product_id = pts.product_id AND pts.store_id = '" . (int)$store_id . "')
				WHERE p.product_id = '" . (int)$product_id . "'
				  AND p.status = '1'
				  AND pd.language_id = '" . (int)$language_id . "'
				LIMIT 1
			");

			if (!$query->num_rows) {
				$json['error'] = $this->language->get('error_product');
			} else {
				$product_info = $query->row;
			}
		}

		if (!$json) {
			$minimum = isset($product_info['minimum']) ? (int)$product_info['minimum'] : 1;
			if ($quantity < $minimum) {
				$json['error'] = sprintf($this->language->get('error_minimum'), $product_info['name'], $minimum);
			}

			$stock_quantity = isset($product_info['quantity']) ? (int)$product_info['quantity'] : 0;
			if ($stock_quantity < $quantity) {
				$json['error'] = sprintf($this->language->get('error_quantity'), $product_info['name']);
			}
		}

		if (!$json) {
			$session_id = '';
			$customer_id = 0;
			$has_session = $this->registry->has('session');
			$has_customer = $this->registry->has('customer');
			$has_cart = $this->registry->has('cart');
			
			if ($has_session) {
				$session = $this->registry->get('session');
				$session_id = $session->getId();
			}
			if ($has_customer) {
				$customer = $this->registry->get('customer');
				$customer_id = $customer->getId();
			}

			if ($has_cart) {
				$this->cart->add($product_id, $quantity);
			}

			$json['success'] = sprintf($this->language->get('success'), $this->url->link('product/product', 'product_id=' . $product_id), $product_info['name'], $this->url->link('cart/cart'));

			if ($has_cart) {
				$cart_count_query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "cart` WHERE `session_id` = '" . $this->db->escape($session_id) . "' AND `customer_id` = '" . (int)$customer_id . "'");
				$json['cart_count'] = (int)$cart_count_query->row['total'];
				
				$cart_total_query = $this->db->query("
					SELECT SUM(c.quantity * p.price) AS total
					FROM `" . DB_PREFIX . "cart` c
					LEFT JOIN `" . DB_PREFIX . "product` p ON c.product_id = p.product_id
					WHERE c.session_id = '" . $this->db->escape($session_id) . "' AND c.customer_id = '" . (int)$customer_id . "'
				");
				$json['cart_total'] = (float)($cart_total_query->row['total'] ?? 0);
			} else {
				$json['cart_count'] = 0;
				$json['cart_total'] = 0;
			}

			$currency_code = $this->config->get('config_currency');
			if ($this->registry->has('session')) {
				$session = $this->registry->get('session');
				if (!empty($session->data['currency'])) {
					$currency_code = $session->data['currency'];
				}
			}
			$currency = $this->registry->has('currency') ? $this->registry->get('currency') : null;
			$json['cart_total_formatted'] = $this->formatPrice($json['cart_total'], $currency, $currency_code);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function update(): void {
		$this->load->language('checkout/cart');

		if (!$this->language->get('error_cart')) {
			$this->language->set('error_cart', 'Cart item not found!');
		}
		if (!$this->language->get('error_quantity')) {
			$this->language->set('error_quantity', 'Not enough stock for %s!');
		}
		if (!$this->language->get('error_minimum')) {
			$this->language->set('error_minimum', 'Minimum quantity for %s is %s!');
		}
		if (!$this->language->get('text_success_update')) {
			$this->language->set('text_success_update', 'Cart updated successfully!');
		}

		$json = [];

		try {
			if (isset($this->request->post['cart_id'])) {
			$cart_id = (int)$this->request->post['cart_id'];
		} else {
			$cart_id = 0;
		}

		if (isset($this->request->post['quantity'])) {
			$quantity = (int)$this->request->post['quantity'];
		} else {
			$quantity = 1;
		}

		if (!$cart_id) {
			$json['error'] = $this->language->get('error_cart');
		}

		if (!$json && $quantity < 1) {
			$json['error'] = $this->language->get('error_quantity');
		}

		if (!$json) {
			$cart_products = $this->cart->getProducts();
			
			if (!isset($cart_products[$cart_id])) {
				$json['error'] = $this->language->get('error_cart');
			} else {
				$cart_product = $cart_products[$cart_id];
				
				$minimum = isset($cart_product['minimum']) ? (int)$cart_product['minimum'] : 1;
				if ($quantity < $minimum) {
					$json['error'] = sprintf($this->language->get('error_minimum'), $cart_product['name'], $minimum);
				}

				$stock_quantity = isset($cart_product['stock']) ? (int)$cart_product['stock'] : 9999;
				if ($stock_quantity < $quantity && $cart_product['subtract']) {
					$json['error'] = sprintf($this->language->get('error_quantity'), $cart_product['name']);
				}
			}
		}

		if (!$json) {
			$this->cart->update($cart_id, $quantity);

			$json['success'] = $this->language->get('text_success_update');

			$this->cart->data = [];
			$cart_products = $this->cart->getProducts();
			if (isset($cart_products[$cart_id])) {
				$cart_product = $cart_products[$cart_id];
				$currency_code = $this->config->get('config_currency');
				if ($this->registry->has('session')) {
					$session = $this->registry->get('session');
					if (!empty($session->data['currency'])) {
						$currency_code = $session->data['currency'];
					}
				}
				$currency = $this->registry->has('currency') ? $this->registry->get('currency') : null;
				
				$item_price = isset($cart_product['price']) ? (float)$cart_product['price'] : 0;
				$item_quantity = isset($cart_product['quantity']) ? (int)$cart_product['quantity'] : $quantity;
				$json['item_total'] = $item_price * $item_quantity;
				$json['item_total_formatted'] = $this->formatPrice($json['item_total'], $currency, $currency_code);
			}

			$json['cart_count'] = $this->cart->countProducts();
			$json['cart_total'] = $this->cart->getSubTotal();
			
			$currency_code = $this->config->get('config_currency');
			if ($this->registry->has('session')) {
				$session = $this->registry->get('session');
				if (!empty($session->data['currency'])) {
					$currency_code = $session->data['currency'];
				}
			}
			$currency = $this->registry->has('currency') ? $this->registry->get('currency') : null;
			$json['cart_total_formatted'] = $this->formatPrice($json['cart_total'], $currency, $currency_code);
		}
		} catch (\Exception $e) {
			$json['error'] = 'An error occurred: ' . $e->getMessage();
			error_log('Cart update error: ' . $e->getMessage());
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function remove(): void {
		$this->load->language('checkout/cart');
		
		// Fallback language strings if not found
		if (!$this->language->get('error_cart')) {
			$this->language->set('error_cart', 'Cart item not found!');
		}
		if (!$this->language->get('text_success_remove')) {
			$this->language->set('text_success_remove', 'Item removed from cart!');
		}

		$json = [];

		try {
			if (isset($this->request->post['cart_id'])) {
			$cart_id = (int)$this->request->post['cart_id'];
		} else {
			$cart_id = 0;
		}

		if (!$cart_id) {
			$json['error'] = $this->language->get('error_cart');
		}

		if (!$json) {
			$this->cart->remove($cart_id);

			$json['success'] = $this->language->get('text_success_remove');

			$this->cart->data = [];
			$json['cart_count'] = $this->cart->countProducts();
			$json['cart_total'] = $this->cart->getSubTotal();
			
			$currency_code = $this->config->get('config_currency');
			if ($this->registry->has('session')) {
				$session = $this->registry->get('session');
				if (!empty($session->data['currency'])) {
					$currency_code = $session->data['currency'];
				}
			}
			$currency = $this->registry->has('currency') ? $this->registry->get('currency') : null;
			$json['cart_total_formatted'] = $this->formatPrice($json['cart_total'], $currency, $currency_code);
		}
		} catch (\Exception $e) {
			$json['error'] = 'An error occurred: ' . $e->getMessage();
			error_log('Cart remove error: ' . $e->getMessage());
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function get(string $key): void
    {
		$json = [];

		$cart_products = $this->cart->getProducts();
		$cart_items = [];
		$subtotal = 0;
		$total_items = 0;

		$currency_code = $this->config->get('config_currency');
		if ($this->registry->has('session')) {
			$session = $this->registry->get('session');
			if (!empty($session->data['currency'])) {
				$currency_code = $session->data['currency'];
			}
		}

		$currency = $this->registry->has('currency') ? $this->registry->get('currency') : null;

		foreach ($cart_products as $cart_product) {
			$product_total = $cart_product['price'] * $cart_product['quantity'];
			$subtotal += $product_total;
			$total_items += $cart_product['quantity'];

			$image = $cart_product['image'] ?: 'catalog/products/controller-default.png';
			$image_url = rtrim(HTTP_SERVER, '/') . '/image/' . ltrim($image, '/');

			$price_formatted = $this->formatPrice((float)$cart_product['price'], $currency, $currency_code);
			$total_formatted = $this->formatPrice((float)$product_total, $currency, $currency_code);

			$cart_items[] = [
				'cart_id'        => $cart_product['cart_id'],
				'product_id'     => $cart_product['product_id'],
				'name'           => $cart_product['name'],
				'model'          => $cart_product['model'],
				'image'          => $image_url,
				'quantity'       => $cart_product['quantity'],
				'price'          => (float)$cart_product['price'],
				'price_formatted' => $price_formatted,
				'total'          => (float)$product_total,
				'total_formatted' => $total_formatted,
				'stock_status'   => $cart_product['stock_status']
			];
		}

		$json['cart_items'] = $cart_items;
		$json['cart_count'] = count($cart_items);
		$json['total_items'] = $total_items;
		$json['subtotal'] = (float)$subtotal;
		$json['subtotal_formatted'] = $this->formatPrice((float)$subtotal, $currency, $currency_code);
		$json['total'] = (float)$subtotal;
		$json['total_formatted'] = $json['subtotal_formatted'];

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
