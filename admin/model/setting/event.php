<?php
namespace Opencart\Admin\Model\Setting;
/**
 * Class Event
 *
 * @package Opencart\Admin\Model\Setting
 */
class Event extends \Opencart\System\Engine\Model {
	/**
	 * Get Events
	 *
	 * @return array<int, array<string, mixed>>
	 */
	public function getEvents(): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "event` ORDER BY `sort_order` ASC");

		return $query->rows;
	}
}

