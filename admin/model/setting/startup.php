<?php
namespace Opencart\Admin\Model\Setting;
/**
 * Class Startup
 *
 * @package Opencart\Admin\Model\Setting
 */
class Startup extends \Opencart\System\Engine\Model {
	/**
	 * Get Startups
	 *
	 * @return array<int, array<string, mixed>>
	 */
	public function getStartups(): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "startup` ORDER BY `sort_order` ASC");

		return $query->rows;
	}
}

