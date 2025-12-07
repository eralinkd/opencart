<?php
namespace Opencart\Admin\Controller\Common;
/**
 * Class Dashboard
 *
 * Can be loaded using $this->load->controller('common/dashboard');
 *
 * @package Opencart\Admin\Controller\Common
 */
class Dashboard extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$this->load->language('common/dashboard');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		// Dashboard Extensions - disabled for simplified admin
		$dashboards = [];
		$data['rows'] = [];

		$data['developer_status'] = false;
		$data['catalog_url'] = $this->url->link('catalog/product', 'user_token=' . $this->session->data['user_token']);
		$data['security'] = $this->load->controller('common/security');
		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('common/dashboard', $data));
	}
}
