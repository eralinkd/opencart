<?php
namespace Opencart\Admin\Model\Localisation;
/**
 * Class Language
 *
 * @package Opencart\Admin\Model\Localisation
 */
class Language extends \Opencart\System\Engine\Model {
	/**
	 * Get Languages
	 *
	 * @return array<int, array<string, mixed>>
	 */
	public function getLanguages(): array {
		$language_data = $this->cache->get('admin.language');

		if (!$language_data) {
			$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "language` ORDER BY `sort_order`, `name`");

			foreach ($query->rows as $result) {
				$language_data[$result['code']] = [
					'language_id' => $result['language_id'],
					'name'        => $result['name'],
					'code'        => $result['code'],
					'locale'      => $result['locale'],
					'extension'  => $result['extension'],
					'status'     => $result['status'],
					'sort_order' => $result['sort_order'],
					'image'      => $result['image'] ?? ''
				];
			}

			$this->cache->set('admin.language', $language_data);
		}

		return $language_data;
	}

	/**
	 * Get Language By Code
	 *
	 * @param string $code
	 * @return array<string, mixed>|null
	 */
	public function getLanguageByCode(string $code): ?array {
		$languages = $this->getLanguages();

		if (isset($languages[$code])) {
			return $languages[$code];
		}

		return null;
	}
}

