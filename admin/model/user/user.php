<?php
namespace Opencart\Admin\Model\User;
/**
 * Class User
 *
 * @package Opencart\Admin\Model\User
 */
class User extends \Opencart\System\Engine\Model {
	/**
	 * Get Authorize By Token
	 *
	 * @param int    $user_id
	 * @param string $token
	 * @return array<string, mixed>|null
	 */
	public function getAuthorizeByToken(int $user_id, string $token): ?array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "user_authorize` WHERE `user_id` = '" . (int)$user_id . "' AND `token` = '" . $this->db->escape($token) . "' AND `status` = '1'");

		if ($query->num_rows) {
			return $query->row;
		} else {
			return null;
		}
	}

	/**
	 * Add Login
	 *
	 * @param int   $user_id
	 * @param array<string, mixed> $data
	 * @return void
	 */
	public function addLogin(int $user_id, array $data): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "user_login` SET `user_id` = '" . (int)$user_id . "', `ip` = '" . $this->db->escape($data['ip']) . "', `user_agent` = '" . $this->db->escape($data['user_agent']) . "', `date_added` = NOW()");
	}

	/**
	 * Get User
	 *
	 * @param int $user_id
	 * @return array<string, mixed>|null
	 */
	public function getUser(int $user_id): ?array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "user` WHERE `user_id` = '" . (int)$user_id . "'");

		if ($query->num_rows) {
			return $query->row;
		} else {
			return null;
		}
	}
}

