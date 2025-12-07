<?php
namespace Opencart\Catalog\Controller\Checkout;

class ExistingCustomer extends \Opencart\System\Engine\Controller {
	public function index(): void {
		
		$this->document->setTitle('Existing Customer Checkout | SkyFix');

		$data = [];
		$data['server'] = HTTP_SERVER;

    $data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$data['url_checkout_new'] = $this->url->link('checkout/new_customer');
		$data['profile_url'] = $this->url->link('account/general');

		$this->response->setOutput($this->load->view('checkout/existing_customer', $data));
	}
}
