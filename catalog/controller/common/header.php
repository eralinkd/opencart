<?php
namespace Opencart\Catalog\Controller\Common;
/**
 * Class Header
 *
 * @package Opencart\Catalog\Controller\Common
 */
class Header extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return string
	 */
	public function index(): string {
		$data['title'] = $this->document->getTitle();
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();

		$data['reset'] = 'catalog/view/stylesheet/reset.css';
		$data['index'] = 'catalog/view/stylesheet/index.css';
		$data['app_header'] = 'catalog/view/stylesheet/app_header.css';
		$data['page_home'] = 'catalog/view/stylesheet/home.css';
		// Компонент кнопки (Web Component)
		$this->document->addScript('catalog/view/javascript/button-component.js');
		$this->document->addScript('catalog/view/javascript/button-secondary.js');

		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();

		$data['home'] = $this->url->link('common/home');
		
		if (isset($this->request->get['route'])) {
			$route = (string)$this->request->get['route'];
		} else {
			$route = 'common/home';
		}
		
		$pos = strrpos($route, '.');
		if ($pos !== false) {
			$route = substr($route, 0, $pos);
		}
		
		$data['is_main_page'] = ($route === 'common/home');
		
		$data['server'] = HTTP_SERVER;
		
		$data['button_component'] = $this->load->view('common/button_component', []);
		$data['button_secondary'] = $this->load->view('common/button_secondary', []);

		return $this->load->view('common/header', $data);
	}
}

