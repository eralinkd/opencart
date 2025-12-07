<?php
namespace Opencart\Admin\Model\Tool;
/**
 * Class Notification
 *
 * @package Opencart\Admin\Model\Tool
 */
class Notification extends \Opencart\System\Engine\Model {
	/**
	 * Add Notification
	 *
	 * @param int $notification_id
	 * @return void
	 */
	public function addNotification(int $notification_id): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "notification` SET `notification_id` = '" . (int)$notification_id . "', `date_added` = NOW()");
	}

	/**
	 * Get Notifications
	 *
	 * @param array<string, mixed> $filter_data
	 * @return array<int, array<string, mixed>>
	 */
	public function getNotifications(array $filter_data = []): array {
		$sql = "SELECT * FROM `" . DB_PREFIX . "notification` WHERE 1=1";

		if (isset($filter_data['filter_status'])) {
			$sql .= " AND `status` = '" . (int)$filter_data['filter_status'] . "'";
		}

		$sql .= " ORDER BY `date_added` DESC";

		if (isset($filter_data['start']) || isset($filter_data['limit'])) {
			if ($filter_data['start'] < 0) {
				$filter_data['start'] = 0;
			}

			if ($filter_data['limit'] < 1) {
				$filter_data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$filter_data['start'] . "," . (int)$filter_data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	/**
	 * Get Total Notifications
	 *
	 * @param array<string, mixed> $filter_data
	 * @return int
	 */
	public function getTotalNotifications(array $filter_data = []): int {
		$sql = "SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "notification` WHERE 1=1";

		if (isset($filter_data['filter_status'])) {
			$sql .= " AND `status` = '" . (int)$filter_data['filter_status'] . "'";
		}

		$query = $this->db->query($sql);

		return (int)$query->row['total'];
	}
}

