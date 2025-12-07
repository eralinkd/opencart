<?php
namespace Opencart\Catalog\Controller\Cart;

class Cart extends \Opencart\System\Engine\Controller {
	public function index(): void {
		
		$this->document->setTitle('Cart | SkyFix');

		$data = [];
		$data['server'] = HTTP_SERVER;

    $this->document->addScript('catalog/view/javascript/components/CartItem.js');
		$data['CartItem'] = $this->load->view('common/components/CartItem', []);

    $data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('cart/cart', $data));
	}
}
