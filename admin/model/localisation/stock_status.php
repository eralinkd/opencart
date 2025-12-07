<?php
namespace Opencart\Admin\Model\Localisation;
/**
 * Class StockStatus
 *
 * Can be loaded using $this->load->model('localisation/stock_status');
 *
 * @package Opencart\Admin\Model\Localisation
 */
class StockStatus extends \Opencart\System\Engine\Model {
	/**
	 * Get Stock Statuses
	 *
	 * @return array<int, array<string, mixed>>
	 */
	public function getStockStatuses(): array {
		// Check if table exists
		$table_exists = $this->db->query("SHOW TABLES LIKE '" . DB_PREFIX . "stock_status'");
		
		if (!$table_exists->num_rows) {
			return [];
		}
		
		$language_id = (int)$this->config->get('config_language_id');
		if (!$language_id) {
			$language_id = 1; // Default to English
		}
		
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "stock_status` WHERE `language_id` = '" . $language_id . "' ORDER BY `name` ASC");

		return $query->rows;
	}

	/**
	 * Get Stock Status
	 *
	 * @param int $stock_status_id
	 *
	 * @return array<string, mixed>|null
	 */
	public function getStockStatus(int $stock_status_id): ?array {
		// Check if table exists
		$table_exists = $this->db->query("SHOW TABLES LIKE '" . DB_PREFIX . "stock_status'");
		
		if (!$table_exists->num_rows) {
			return null;
		}
		
		$language_id = (int)$this->config->get('config_language_id');
		if (!$language_id) {
			$language_id = 1; // Default to English
		}
		
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "stock_status` WHERE `stock_status_id` = '" . (int)$stock_status_id . "' AND `language_id` = '" . $language_id . "' LIMIT 1");

		if ($query->num_rows) {
			return $query->row;
		} else {
			return null;
		}
	}
}

