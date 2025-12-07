<?php
namespace Opencart\System\Library\DroneParts;

class CategoryAttributeService {
	/**
	 * @var \Opencart\System\Engine\Registry
	 */
	protected \Opencart\System\Engine\Registry $registry;
	
	/**
	 * @var \Opencart\Admin\Model\Catalog\Attribute
	 */
	protected $model_catalog_attribute;
	
	/**
	 * @var \Opencart\Admin\Model\Catalog\AttributeGroup
	 */
	protected $model_catalog_attribute_group;
	
	/**
	 * Constructor
	 *
	 * @param \Opencart\System\Engine\Registry $registry
	 */
	public function __construct(\Opencart\System\Engine\Registry $registry) {
		$this->registry = $registry;
		
		// Load models through loader
		$loader = $registry->get('load');
		$loader->model('catalog/attribute');
		$loader->model('catalog/attribute_group');
		
		$this->model_catalog_attribute = $registry->get('model_catalog_attribute');
		$this->model_catalog_attribute_group = $registry->get('model_catalog_attribute_group');
	}
	
	/**
	 * Get attributes for category
	 * 
	 * @param int $category_id
	 * @return array<int, array<string, mixed>>
	 */
	public function getCategoryAttributes(int $category_id): array {
		$query = $this->registry->get('db')->query("
			SELECT ag.*, agd.name as group_name
			FROM `" . DB_PREFIX . "attribute_group` ag
			LEFT JOIN `" . DB_PREFIX . "attribute_group_description` agd ON ag.attribute_group_id = agd.attribute_group_id
			WHERE agd.language_id = '1'
			ORDER BY ag.sort_order
		");
		
		$attribute_groups = [];
		foreach ($query->rows as $row) {
			$attributes = $this->model_catalog_attribute->getAttributes([
				'filter_attribute_group_id' => $row['attribute_group_id']
			]);
			
			$attribute_groups[] = [
				'attribute_group_id' => $row['attribute_group_id'],
				'name' => $row['group_name'],
				'sort_order' => $row['sort_order'],
				'attributes' => $attributes
			];
		}
		
		return $attribute_groups;
	}
	
	/**
	 * Create attribute group for category
	 * 
	 * @param int $category_id
	 * @param string $group_name
	 * @param int $sort_order
	 * @return int|null Attribute group ID
	 */
	public function createAttributeGroupForCategory(int $category_id, string $group_name, int $sort_order = 0): ?int {
		$language_id = 1;
		
		$data = [
			'attribute_group_description' => [
				$language_id => [
					'name' => $group_name
				]
			],
			'sort_order' => $sort_order
		];
		
		try {
			$attribute_group_id = $this->model_catalog_attribute_group->addAttributeGroup($data);
			return $attribute_group_id;
		} catch (\Exception $e) {
			error_log('Error creating attribute group: ' . $e->getMessage());
			return null;
		}
	}
	
	/**
	 * Create attribute for category
	 * 
	 * @param int $attribute_group_id
	 * @param string $attribute_name
	 * @param int $sort_order
	 * @return int|null Attribute ID
	 */
	public function createAttribute(int $attribute_group_id, string $attribute_name, int $sort_order = 0): ?int {
		$language_id = 1;
		
		$data = [
			'attribute_description' => [
				$language_id => [
					'name' => $attribute_name
				]
			],
			'attribute_group_id' => $attribute_group_id,
			'sort_order' => $sort_order
		];
		
		try {
			$attribute_id = $this->model_catalog_attribute->addAttribute($data);
			return $attribute_id;
		} catch (\Exception $e) {
			error_log('Error creating attribute: ' . $e->getMessage());
			return null;
		}
	}
}

