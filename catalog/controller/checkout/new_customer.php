<?php
namespace Opencart\Catalog\Controller\Checkout;

class NewCustomer extends \Opencart\System\Engine\Controller {
	public function index(): void {
		
		$this->document->setTitle('New Customer Checkout | SkyFix');

		$data = [];
		$data['server'] = HTTP_SERVER;

    $data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$data['url_checkout_existing'] = $this->url->link('checkout/existing_customer');
		$data['url_checkout_new'] = $this->url->link('checkout/new_customer');

		$data['delivery_methods'] = [
			[
				'id'          => 'nova_branch',
				'title'       => 'Nova Poshta — Branch Pickup',
			],
			[
				'id'          => 'nova_courier',
				'title'       => 'Nova Poshta — Courier Delivery',
			],
			[
				'id'          => 'ukrposhta',
				'title'       => 'Ukrposhta',
			],
			[
				'id'          => 'local_courier',
				'title'       => 'Local Courier Delivery',
			],
		];

		$this->response->setOutput($this->load->view('checkout/new_customer', $data));
	}
}
