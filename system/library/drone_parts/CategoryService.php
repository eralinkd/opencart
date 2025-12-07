<?php
namespace Opencart\System\Library\DroneParts;
class CategoryService {
	/**
	 * @var \Opencart\System\Engine\Registry
	 */
	protected \Opencart\System\Engine\Registry $registry;
	
	/**
	 * @var \Opencart\Admin\Model\Catalog\Category
	 */
	protected $model_catalog_category;
	
	/**
	 * @var \Opencart\Admin\Model\Design\SeoUrl
	 */
	protected $model_design_seo_url;
	
	/**
	 * Constructor
	 *
	 * @param \Opencart\System\Engine\Registry $registry
	 */
	public function __construct(\Opencart\System\Engine\Registry $registry) {
		$this->registry = $registry;
		
		// Load models through loader
		$loader = $registry->get('load');
		$loader->model('catalog/category');
		$loader->model('design/seo_url');
		
		$this->model_catalog_category = $registry->get('model_catalog_category');
		$this->model_design_seo_url = $registry->get('model_design_seo_url');
	}
	
	/**
	 * Create default categories for drone parts
	 * 
	 * @return array<int> Array of created category IDs
	 */
	public function createDefaultCategories(): array {
		$categories = [
			[
				'name' => 'Controllers',
				'description' => '',
				'seo_keyword' => 'controllers',
				'sort_order' => 1
			],
			[
				'name' => 'Batteries',
				'description' => '',
				'seo_keyword' => 'batteries',
				'sort_order' => 2
			]
		];
		
		$created_ids = [];
		
		foreach ($categories as $category_data) {
			$category_id = $this->createCategory($category_data);
			if ($category_id) {
				$created_ids[] = $category_id;
			}
		}
		
		return $created_ids;
	}
	
	/**
	 * Create a category
	 * 
	 * @param array<string, mixed> $data Category data
	 * @return int|null Category ID or null on failure
	 */
	public function createCategory(array $data): ?int {
		// Get default language
		$language_id = 1; // English by default
		
		// Prepare category data
		$category_data = [
			'category_description' => [
				$language_id => [
					'name' => $data['name'] ?? '',
					'description' => $data['description'] ?? '',
					'meta_title' => $data['name'] ?? '',
					'meta_description' => $data['description'] ?? '',
					'meta_keyword' => ''
				]
			],
			'image' => $data['image'] ?? '',
			'parent_id' => $data['parent_id'] ?? 0,
			'sort_order' => $data['sort_order'] ?? 0,
			'status' => $data['status'] ?? 1,
			'category_filter' => $data['category_filter'] ?? [],
			'category_store' => $data['category_store'] ?? [0],
			'category_seo_url' => [
				0 => [ // Default store
					$language_id => $data['seo_keyword'] ?? ''
				]
			]
		];
		
		try {
			$category_id = $this->model_catalog_category->addCategory($category_data);
			return $category_id;
		} catch (\Exception $e) {
			// Log error
			error_log('Error creating category: ' . $e->getMessage());
			return null;
		}
	}
	
	/**
	 * Get category by ID
	 * 
	 * @param int $category_id
	 * @return array<string, mixed>|null
	 */
	public function getCategory(int $category_id): ?array {
		return $this->model_catalog_category->getCategory($category_id);
	}
	
	/**
	 * Get all categories
	 * 
	 * @param array<string, mixed> $filter_data
	 * @return array<int, array<string, mixed>>
	 */
	public function getCategories(array $filter_data = []): array {
		return $this->model_catalog_category->getCategories($filter_data);
	}
}

