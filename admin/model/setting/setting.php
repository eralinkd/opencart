<?php
namespace Opencart\Admin\Model\Setting;
/**
 * Class Setting
 *
 * @package Opencart\Admin\Model\Setting
 */
class Setting extends \Opencart\System\Engine\Model {
	/**
	 * Get Settings
	 *
	 * @param int $store_id
	 * @return array<int, array<string, mixed>>
	 */
	public function getSettings(int $store_id = 0): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "setting` WHERE `store_id` = '" . (int)$store_id . "'");

		return $query->rows;
	}

	/**
	 * Get Setting
	 *
	 * @param string $key
	 * @param int    $store_id
	 * @return string
	 */
	public function getSetting(string $key, int $store_id = 0): string {
		$query = $this->db->query("SELECT `value` FROM `" . DB_PREFIX . "setting` WHERE `store_id` = '" . (int)$store_id . "' AND `key` = '" . $this->db->escape($key) . "'");

		if ($query->num_rows) {
			return $query->row['value'];
		} else {
			return '';
		}
	}

	/**
	 * Edit Setting
	 *
	 * @param string $code
	 * @param string $key
	 * @param string $value
	 * @param int    $store_id
	 * @return void
	 */
	public function editSetting(string $code, string $key, string $value, int $store_id = 0): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "setting` WHERE `store_id` = '" . (int)$store_id . "' AND `code` = '" . $this->db->escape($code) . "' AND `key` = '" . $this->db->escape($key) . "'");

		$this->db->query("INSERT INTO `" . DB_PREFIX . "setting` SET `store_id` = '" . (int)$store_id . "', `code` = '" . $this->db->escape($code) . "', `key` = '" . $this->db->escape($key) . "', `value` = '" . $this->db->escape($value) . "'");
	}

	/**
	 * Delete Setting
	 *
	 * @param string $code
	 * @param int    $store_id
	 * @return void
	 */
	public function deleteSetting(string $code, int $store_id = 0): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "setting` WHERE `store_id` = '" . (int)$store_id . "' AND `code` = '" . $this->db->escape($code) . "'");
	}
}

