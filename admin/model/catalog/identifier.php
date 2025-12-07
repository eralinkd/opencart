<?php
namespace Opencart\Admin\Model\Catalog;
/**
 * Class Identifier
 *
 * Can be loaded using $this->load->model('catalog/identifier');
 *
 * @package Opencart\Admin\Model\Catalog
 */
class Identifier extends \Opencart\System\Engine\Model {
	/**
	 * Get Identifiers
	 *
	 * @return array<int, array<string, mixed>>
	 */
	public function getIdentifiers(): array {
		// Check if table exists
		$table_exists = $this->db->query("SHOW TABLES LIKE '" . DB_PREFIX . "identifier'");
		
		if (!$table_exists->num_rows) {
			return [];
		}
		
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "identifier` WHERE `status` = '1' ORDER BY `name` ASC");

		return $query->rows;
	}

	/**
	 * Get Identifier By Code
	 *
	 * @param string $code
	 *
	 * @return array<string, mixed>|null
	 */
	public function getIdentifierByCode(string $code): ?array {
		// Check if table exists
		$table_exists = $this->db->query("SHOW TABLES LIKE '" . DB_PREFIX . "identifier'");
		
		if (!$table_exists->num_rows) {
			return null;
		}
		
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "identifier` WHERE `code` = '" . $this->db->escape($code) . "' AND `status` = '1' LIMIT 1");

		if ($query->num_rows) {
			return $query->row;
		} else {
			return null;
		}
	}
}

