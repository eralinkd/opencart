<?php
namespace Opencart\Admin\Model\Setting;
/**
 * Class Extension
 *
 * @package Opencart\Admin\Model\Setting
 */
class Extension extends \Opencart\System\Engine\Model {
	/**
	 * Get Installs
	 *
	 * @return array<int, array<string, mixed>>
	 */
	public function getInstalls(): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "extension_install` ORDER BY `date_added` DESC");

		return $query->rows;
	}

	/**
	 * Get Extensions By Type
	 *
	 * @param string $type
	 * @return array<int, array<string, mixed>>
	 */
	public function getExtensionsByType(string $type): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "extension` WHERE `type` = '" . $this->db->escape($type) . "'");

		return $query->rows;
	}
}

