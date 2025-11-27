<?php
namespace Opencart\Catalog\Controller\Common;
/**
 * Class Home
 *
 * @package Opencart\Catalog\Controller\Common
 */
class Home extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$this->load->language('common/home');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['heading_title'] = $this->language->get('heading_title');
		$data['text_welcome'] = $this->language->get('text_welcome');

		// Подключаем локальный компонент карточки только для этой страницы
		$this->document->addScript('catalog/view/javascript/card-component.js');
		
		// Подключаем Swiper для слайдера товаров
		$this->document->addStyle('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
		$this->document->addScript('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');
		
		// Рендерим компонент карточки и передаем в шаблон
		$data['card_component'] = $this->load->view('common/card_component', []);

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}

