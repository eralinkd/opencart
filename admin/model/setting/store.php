<?php
namespace Opencart\Admin\Model\Setting;
/**
 * Class Store
 *
 * @package Opencart\Admin\Model\Setting
 */
class Store extends \Opencart\System\Engine\Model {
	/**
	 * Get Stores
	 *
	 * @return array<int, array<string, mixed>>
	 */
	public function getStores(): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "store` ORDER BY `url`");

		return $query->rows;
	}
}

