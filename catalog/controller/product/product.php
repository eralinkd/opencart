<?php
namespace Opencart\Catalog\Controller\Product;

class Product extends \Opencart\System\Engine\Controller {
	public function index(): void {
		$this->document->addStyle('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
		$this->document->addScript('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');
		
		$product_id = isset($this->request->get['product_id']) ? (int)$this->request->get['product_id'] : 0;

		$product = $this->getProduct($product_id);
		if (!$product) {
			$product = $this->getFallbackProduct();

			if (!$product) {
				$this->response->redirect($this->url->link('common/home'));
				return;
			}
		}

		$this->document->setTitle($product['name'] . ' | SkyFix');

		$description_text = strip_tags($product['description']);
		$this->document->setDescription(substr($description_text, 0, 155));

		$currency_code = $this->config->get('config_currency');
		if ($this->registry->has('session')) {
			$session = $this->registry->get('session');
			if (!empty($session->data['currency'])) {
				$currency_code = $session->data['currency'];
			}
		}

		$currency = $this->registry->has('currency') ? $this->registry->get('currency') : null;
		$price_formatted = $currency ? $currency->format((float)$product['price'], $currency_code) : $currency_code . ' ' . number_format((float)$product['price'], 2);

		$data = [];
		$data['server'] = HTTP_SERVER;
		$product_images = $this->getProductImages($product['product_id'], $product['image_full']);

		$data['product'] = [
			'product_id'      => $product['product_id'],
			'name'            => $product['name'],
			'model'           => $product['model'],
			'description'     => $product['description'],
			'image'           => $product['image_full'],
			'price_formatted' => $price_formatted,
			'availability'    => $product['quantity'] > 0 ? 'In stock' : 'Out of stock',
			'stock_text'      => $product['quantity'] > 0 ? $product['quantity'] . ' units available' : 'Backorder available',
			'category'        => $product['category_name'],
			'highlights'      => $this->buildHighlights($product),
			'specs'           => $this->buildSpecs($product)
		];

		$data['product_images'] = $product_images;
		$data['related_products'] = $this->getRelatedProducts($product['category_id'], $product['product_id']);
				$data['battery_products'] = $this->getProductsByCategoryName('Batteries', 5);


		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('product/product', $data));
	}

	protected function getProduct(int $product_id): ?array {
		if (!$product_id) {
			return null;
		}

		$language_id = (int)$this->config->get('config_language_id');
		if (!$language_id) {
			$language_id = 1;
		}

		$store_id = (int)$this->config->get('config_store_id');

		$query = $this->db->query("
			SELECT 
				p.product_id,
				p.model,
				p.price,
				p.quantity,
				p.image,
				pd.name,
				pd.description,
				pc.category_id,
				cd.name AS category_name
			FROM `" . DB_PREFIX . "product` p
			INNER JOIN `" . DB_PREFIX . "product_description` pd ON (p.product_id = pd.product_id AND pd.language_id = '" . (int)$language_id . "')
			INNER JOIN `" . DB_PREFIX . "product_to_category` pc ON (p.product_id = pc.product_id)
			INNER JOIN `" . DB_PREFIX . "category_description` cd ON (pc.category_id = cd.category_id AND cd.language_id = '" . (int)$language_id . "')
			INNER JOIN `" . DB_PREFIX . "product_to_store` pts ON (p.product_id = pts.product_id AND pts.store_id = '" . (int)$store_id . "')
			WHERE p.status = '1'
			  AND p.product_id = '" . (int)$product_id . "'
			LIMIT 1
		");

		if (!$query->num_rows) {
			return null;
		}

		$row = $query->row;

		return [
			'product_id'   => (int)$row['product_id'],
			'name'         => $row['name'],
			'model'        => $row['model'],
			'description'  => html_entity_decode($row['description'], ENT_QUOTES, 'UTF-8'),
			'price'        => (float)$row['price'],
			'quantity'     => (int)$row['quantity'],
			'image'        => $row['image'],
			'image_full'   => $row['image'] ? rtrim(HTTP_SERVER, '/') . '/image/' . ltrim($row['image'], '/') : rtrim(HTTP_SERVER, '/') . '/image/product1.png',
			'category_id'  => (int)$row['category_id'],
			'category_name'=> $row['category_name']
		];
	}

	protected function getFallbackProduct(): ?array {
		$query = $this->db->query("SELECT product_id FROM `" . DB_PREFIX . "product` WHERE status = '1' ORDER BY date_added DESC LIMIT 1");

		if (!$query->num_rows) {
			return null;
		}

		return $this->getProduct((int)$query->row['product_id']);
	}

	protected function buildHighlights(array $product): array {
		$highlights = [];
		$highlights[] = 'Model ' . ($product['model'] ?: 'N/A');
		$highlights[] = $product['quantity'] > 0 ? 'Ships within 24h' : 'Production lead time 3-5 days';
		$highlights[] = 'Category: ' . $product['category_name'];

		return $highlights;
	}

	protected function buildSpecs(array $product): array {
		return [
			['label' => 'SKU', 'value' => 'SKY-' . str_pad((string)$product['product_id'], 4, '0', STR_PAD_LEFT)],
			['label' => 'Model', 'value' => $product['model'] ?: '—'],
			['label' => 'Category', 'value' => $product['category_name']],
			['label' => 'Availability', 'value' => $product['quantity'] > 0 ? 'In stock' : 'Backorder'],
		];
	}

	protected function getRelatedProducts(int $category_id, int $exclude_id): array {
		$language_id = (int)$this->config->get('config_language_id');
		$currency_code = $this->config->get('config_currency');
		if ($this->registry->has('session')) {
			$session = $this->registry->get('session');
			if (!empty($session->data['currency'])) {
				$currency_code = $session->data['currency'];
			}
		}

		$currency = $this->registry->has('currency') ? $this->registry->get('currency') : null;

		$query = $this->db->query("
			SELECT p.product_id, p.image, p.price, pd.name
			FROM `" . DB_PREFIX . "product` p
			INNER JOIN `" . DB_PREFIX . "product_description` pd ON (p.product_id = pd.product_id AND pd.language_id = '" . (int)$language_id . "')
			INNER JOIN `" . DB_PREFIX . "product_to_category` pc ON (p.product_id = pc.product_id AND pc.category_id = '" . (int)$category_id . "')
			WHERE p.status = '1'
			  AND p.product_id <> '" . (int)$exclude_id . "'
			ORDER BY p.date_added DESC
			LIMIT 4
		");

		$items = [];

		foreach ($query->rows as $row) {
			$imagePath = $row['image'] ?: 'catalog/products/controller-default.png';
			$price_formatted = $currency ? $currency->format((float)$row['price'], $currency_code) : $currency_code . ' ' . number_format((float)$row['price'], 2);
			$items[] = [
				'product_id' => (int)$row['product_id'],
				'name'       => $row['name'],
				'image'      => rtrim(HTTP_SERVER, '/') . '/image/' . ltrim($imagePath, '/'),
				'price'      => $price_formatted
			];
		}

		return $items;
	}

	/**
	 * Получаем все изображения продукта (главное + из product_image)
	 *
	 * @param int    $product_id
	 * @param string $main_image
	 *
	 * @return array<int, string>
	 */
	protected function getProductImages(int $product_id, string $main_image): array {
		$images = [];

		if ($main_image) {
			$images[] = $main_image;
		}

		$query = $this->db->query("
			SELECT image
			FROM `" . DB_PREFIX . "product_image`
			WHERE product_id = '" . (int)$product_id . "'
			ORDER BY sort_order ASC
		");

		foreach ($query->rows as $row) {
			if (empty($row['image'])) {
				continue;
			}

			$images[] = rtrim(HTTP_SERVER, '/') . '/image/' . ltrim($row['image'], '/');
		}

		// Удаляем дубликаты и переиндексируем
		return array_values(array_unique($images));
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
			} else {
				$price_formatted = $currency_code . ' ' . number_format((float)$row['price'], 2);
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

