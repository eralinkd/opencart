<?php
namespace Opencart\Catalog\Controller\Account;

class Wishlist extends \Opencart\System\Engine\Controller {
	public function index(): void {
		
		$this->document->setTitle('Account Wishlist | SkyFix');

		$data = [];
		$data['server'] = HTTP_SERVER;

    $data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$data['general_url'] = $this->url->link('account/general');
		$data['history_url'] = $this->url->link('account/history');
		$data['wishlist_url'] = $this->url->link('account/wishlist');

		$data['wishlist_products'] = $this->getProductsByCategoryName('Batteries', 5);

		$this->response->setOutput($this->load->view('account/wishlist', $data));
	}

		/**
	 * Fetch products for the homepage slider by category name
	 *
	 * @param string $categoryName
	 * @param int    $limit
	 *
	 * @return array<int, array<string, mixed>>
	 */
	protected function getProductsByCategoryName(string $categoryName, int $limit = 5): array {
		$language_id = (int)$this->config->get('config_language_id') ?: 1;
		$category_id = $this->getCategoryIdByName($categoryName);

		if (!$category_id) {
			return [];
		}

		$product_query = $this->db->query("
			SELECT 
				p.product_id,
				p.image,
				p.price,
				p.quantity,
				p.model,
				pd.name
			FROM `" . DB_PREFIX . "product` p
			INNER JOIN `" . DB_PREFIX . "product_description` pd ON (p.product_id = pd.product_id AND pd.language_id = '" . (int)$language_id . "')
			INNER JOIN `" . DB_PREFIX . "product_to_category` pc ON (p.product_id = pc.product_id)
			INNER JOIN `" . DB_PREFIX . "product_to_store` pts ON (p.product_id = pts.product_id)
			WHERE pc.category_id = '" . (int)$category_id . "'
			  AND pts.store_id = '" . (int)$this->config->get('config_store_id') . "'
			  AND p.status = '1'
			ORDER BY p.date_added DESC, pd.name ASC
			LIMIT " . (int)$limit . "
		");

		$products = [];
		$fallback = (stripos($categoryName, 'battery') !== false) ? 'catalog/products/battery-default.png' : 'catalog/products/controller-default.png';
		$currency_code = $this->config->get('config_currency');
		if ($this->registry->has('session')) {
			$session = $this->registry->get('session');
			if (!empty($session->data['currency'])) {
				$currency_code = $session->data['currency'];
			}
		}

		$currency = $this->registry->has('currency') ? $this->registry->get('currency') : null;

		foreach ($product_query->rows as $row) {
			$imagePath = $row['image'] ?: $fallback;
			$imageUrl = rtrim(HTTP_SERVER, '/') . '/image/' . ltrim($imagePath, '/');

			if ($currency) {
				$price_formatted = $currency->format((float)$row['price'], $currency_code);
				// Fallback if currency format returns empty (currency not found in DB)
				if (empty($price_formatted)) {
					$price_formatted = '$' . number_format((float)$row['price'], 2);
				}
			} else {
				$price_formatted = '$' . number_format((float)$row['price'], 2);
			}

			$product_url = $this->url->link('product/product', 'product_id=' . (int)$row['product_id']);
			$product_url_raw = $this->url->link('product/product', 'product_id=' . (int)$row['product_id'], true);

			$products[] = [
				'product_id'      => (int)$row['product_id'],
				'name'            => $row['name'],
				'model'           => $row['model'],
				'image'           => $imageUrl,
				'price_raw'       => (float)$row['price'],
				'price_formatted' => $price_formatted,
				'in_stock'        => (int)$row['quantity'] > 0,
				'availability'    => ((int)$row['quantity'] > 0) ? 'In stock' : 'Out of stock',
				'url'             => $product_url,
				'url_raw'         => $product_url_raw
			];
		}

		return $products;
	}

		/**
	 * Resolve category id by name
	 *
	 * @param string $categoryName
	 * @return int|null
	 */
	protected function getCategoryIdByName(string $categoryName): ?int {
		$language_id = (int)$this->config->get('config_language_id') ?: 1;

		$query = $this->db->query("
			SELECT cd.category_id 
			FROM `" . DB_PREFIX . "category_description` cd
			WHERE cd.language_id = '" . (int)$language_id . "'
			  AND cd.name = '" . $this->db->escape($categoryName) . "'
			LIMIT 1
		");

		if ($query->num_rows) {
			return (int)$query->row['category_id'];
		}

		return null;
	}
}
