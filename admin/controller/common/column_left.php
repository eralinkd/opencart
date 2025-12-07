<?php
namespace Opencart\Admin\Controller\Common;
/**
 * Class Column Left
 *
 * Can be loaded using $this->load->controller('common/column_left');
 *
 * @package Opencart\Admin\Controller\Common
 */
class ColumnLeft extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return string
	 */
	public function index(): string {
		if (isset($this->request->get['user_token']) && isset($this->session->data['user_token']) && ((string)$this->request->get['user_token'] == $this->session->data['user_token'])) {
			$this->load->language('common/column_left');

			// Dashboard
			$data['menus'][] = [
				'id'       => 'menu-dashboard',
				'icon'     => 'fas fa-home',
				'name'     => $this->language->get('text_dashboard'),
				'href'     => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token']),
				'children' => []
			];

			// Catalog - только категории и товары
			$catalog = [];

			if ($this->user->hasPermission('access', 'catalog/category')) {
				$catalog[] = [
					'name'     => $this->language->get('text_category'),
					'href'     => $this->url->link('catalog/category', 'user_token=' . $this->session->data['user_token']),
					'children' => []
				];
			}

			if ($this->user->hasPermission('access', 'catalog/product')) {
				$catalog[] = [
					'name'     => $this->language->get('text_product'),
					'href'     => $this->url->link('catalog/product', 'user_token=' . $this->session->data['user_token']),
					'children' => []
				];
			}

			if ($catalog) {
				$data['menus'][] = [
					'id'       => 'menu-catalog',
					'icon'     => 'fa-solid fa-tag',
					'name'     => $this->language->get('text_catalog'),
					'href'     => '',
					'children' => $catalog
				];
			}

			// Удаляем статистику, она не нужна для упрощенной админки
			$data['statistics_status'] = false;

			return $this->load->view('common/column_left', $data);
		} else {
			return '';
		}
	}
}
