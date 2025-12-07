<?php
namespace Opencart\Admin\Controller\Common;
/**
 * Class Header
 *
 * Can be loaded using $this->load->controller('common/header');
 *
 * @package Opencart\Admin\Controller\Common
 */
class Header extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return string
	 */
	public function index(): string {
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['title'] = $this->document->getTitle();
		$data['base'] = HTTP_SERVER;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();

		// Hard coding css so they can be replaced via the event's system.
		$data['icons'] = 'view/stylesheet/fonts/fontawesome/css/all.min.css';
		$data['stylesheet'] = 'view/stylesheet/stylesheet.css';
		$data['components'] = 'view/stylesheet/components.css';

		// Hard coding scripts so they can be replaced via the event's system.
		$data['jquery'] = 'view/javascript/jquery/jquery-3.7.1.min.js';

		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();

		$this->load->language('common/header');

		if (!isset($this->request->get['user_token']) || !isset($this->session->data['user_token']) || ($this->request->get['user_token'] != $this->session->data['user_token'])) {
			$data['home'] = $this->url->link('common/login');
		} else {
			$data['home'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token']);
		}

		return $this->load->view('common/header', $data);
	}
}
