<?php
namespace Opencart\System\Library\DroneParts;

/**
 * Product Service
 * 
 * Сервис для работы с товарами (запчастями для дронов)
 * Реализует принципы SOLID
 * 
 * @package Opencart\System\Library\DroneParts
 */
class ProductService {
	/**
	 * @var \Opencart\System\Engine\Registry
	 */
	protected \Opencart\System\Engine\Registry $registry;
	
	/**
	 * @var \Opencart\Admin\Model\Catalog\Product
	 */
	protected $model_catalog_product;
	
	/**
	 * Constructor
	 *
	 * @param \Opencart\System\Engine\Registry $registry
	 */
	public function __construct(\Opencart\System\Engine\Registry $registry) {
		$this->registry = $registry;
		
		// Load models through loader
		$loader = $registry->get('load');
		$loader->model('catalog/product');
		
		$this->model_catalog_product = $registry->get('model_catalog_product');
	}
	
	/**
	 * Create a product
	 * 
	 * @param array<string, mixed> $data Product data
	 * @return int|null Product ID or null on failure
	 */
	public function createProduct(array $data): ?int {
		// Get default language
		$language_id = 1; // English by default
		
		// Validate required fields
		if (empty($data['name']) || empty($data['price'])) {
			return null;
		}
		
		// Prepare product data with defaults
		$product_data = [
			'product_description' => [
				$language_id => [
					'name' => $data['name'] ?? '',
					'description' => $data['description'] ?? '',
					'meta_title' => $data['name'] ?? '',
					'meta_description' => $data['description'] ?? '',
					'meta_keyword' => '',
					'tag' => ''
				]
			],
			'model' => $data['model'] ?? '',
			'image' => $data['image'] ?? '',
			'price' => (float)($data['price'] ?? 0),
			'quantity' => (int)($data['quantity'] ?? 0),
			'status' => isset($data['status']) ? (bool)$data['status'] : true,
			'product_category' => $data['product_category'] ?? [],
			'product_store' => $data['product_store'] ?? [0],
			'product_image' => $data['product_image'] ?? [],
			'master_id' => $data['master_id'] ?? 0,
			'location' => $data['location'] ?? '',
			'variant' => $data['variant'] ?? [],
			'override' => $data['override'] ?? [],
			'minimum' => $data['minimum'] ?? 1,
			'subtract' => $data['subtract'] ?? 1,
			'stock_status_id' => $data['stock_status_id'] ?? 1,
			'date_available' => $data['date_available'] ?? date('Y-m-d'),
			'manufacturer_id' => $data['manufacturer_id'] ?? 0,
			'shipping' => $data['shipping'] ?? 1,
			'points' => $data['points'] ?? 0,
			'weight' => $data['weight'] ?? 0,
			'weight_class_id' => $data['weight_class_id'] ?? 1,
			'length' => $data['length'] ?? 0,
			'width' => $data['width'] ?? 0,
			'height' => $data['height'] ?? 0,
			'length_class_id' => $data['length_class_id'] ?? 1,
			'tax_class_id' => $data['tax_class_id'] ?? 0,
			'sort_order' => $data['sort_order'] ?? 0,
			'product_attribute' => $data['product_attribute'] ?? [],
			'product_option' => $data['product_option'] ?? [],
			'product_filter' => $data['product_filter'] ?? [],
			'product_download' => $data['product_download'] ?? [],
			'product_related' => $data['product_related'] ?? [],
			'product_reward' => $data['product_reward'] ?? [],
			'product_seo_url' => $data['product_seo_url'] ?? [],
			'product_layout' => $data['product_layout'] ?? [],
			'product_code' => $data['product_code'] ?? [],
			'product_subscription' => $data['product_subscription'] ?? [],
			'product_discount' => $data['product_discount'] ?? []
		];
		
		try {
			$product_id = $this->model_catalog_product->addProduct($product_data);
			return $product_id;
		} catch (\Exception $e) {
			// Log error
			error_log('Error creating product: ' . $e->getMessage());
			return null;
		}
	}
	
	/**
	 * Get product by ID
	 * 
	 * @param int $product_id
	 * @return array<string, mixed>|null
	 */
	public function getProduct(int $product_id): ?array {
		return $this->model_catalog_product->getProduct($product_id);
	}
	
	/**
	 * Get products by category
	 * 
	 * @param int $category_id
	 * @param array<string, mixed> $filter_data
	 * @return array<int, array<string, mixed>>
	 */
	public function getProductsByCategory(int $category_id, array $filter_data = []): array {
		$filter_data['filter_category_id'] = $category_id;
		return $this->model_catalog_product->getProducts($filter_data);
	}
	
	/**
	 * Update product
	 * 
	 * @param int $product_id
	 * @param array<string, mixed> $data
	 * @return bool
	 */
	public function updateProduct(int $product_id, array $data): bool {
		try {
			$this->model_catalog_product->editProduct($product_id, $data);
			return true;
		} catch (\Exception $e) {
			error_log('Error updating product: ' . $e->getMessage());
			return false;
		}
	}
	
	/**
	 * Delete product
	 * 
	 * @param int $product_id
	 * @return bool
	 */
	public function deleteProduct(int $product_id): bool {
		try {
			$this->model_catalog_product->deleteProduct($product_id);
			return true;
		} catch (\Exception $e) {
			error_log('Error deleting product: ' . $e->getMessage());
			return false;
		}
	}
	
	/**
	 * Add images to product
	 * 
	 * @param int $product_id
	 * @param array<string> $images Array of image paths
	 * @return bool
	 */
	public function addProductImages(int $product_id, array $images): bool {
		try {
			$product_images = [];
			$sort_order = 0;
			
			foreach ($images as $image) {
				$product_images[] = [
					'image' => $image,
					'sort_order' => $sort_order++
				];
			}
			
			foreach ($product_images as $product_image) {
				$this->model_catalog_product->addImage($product_id, $product_image);
			}
			
			return true;
		} catch (\Exception $e) {
			error_log('Error adding product images: ' . $e->getMessage());
			return false;
		}
	}
}

