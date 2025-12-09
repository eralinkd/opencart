<?php
namespace Opencart\Catalog\Controller\Account;

class History extends \Opencart\System\Engine\Controller {
	public function index(): void {
		
		$this->document->setTitle('Account History | SkyFix');

		$data = [];
		$data['server'] = HTTP_SERVER;

    $data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$data['general_url'] = $this->url->link('account/general');
		$data['history_url'] = $this->url->link('account/history');
		$data['wishlist_url'] = $this->url->link('account/wishlist');

		$data['orders'] = [
			[
				'number'        => 'No. 158696',
				'datetime'      => 'January 10, 2025 12:44',
				'status'        => 'Delivered',
				'status_class'  => 'delivered',
				'total'         => '$80',
				'items'         => [
					[
						'image'   => HTTP_SERVER . 'image/product/product1.jpg',
						'name'    => 'Battery FPV 6S3P 12000mAh Li-ion Zeeepower',
						'model'   => 'ZEEE12000-10-6S',
						'price'   => '$35',
						'qty'     => 1,
						'amount'  => '$35',
					],
					[
						'image'   => HTTP_SERVER . 'image/product/product1.jpg',
						'name'    => 'Battery FPV 6S3P 12000mAh Li-ion Zeeepower',
						'model'   => 'ZEEE12000-10-6S',
						'price'   => '$35',
						'qty'     => 1,
						'amount'  => '$35',
					],
				],
				'delivery_address' => 'Kyiv, Nova Poshta branch № 1234',
				'recipient_name'   => 'James Thor',
				'recipient_phone'  => '+380962345678',
				'payment_method'   => 'Applepay',
				'shipping'         => '$10',
				'subtotal'         => '$70',
			],
			[
				'number'        => 'No. 158696',
				'datetime'      => 'January 10, 2025 12:44',
				'status'        => 'Shipped',
				'status_class'  => 'shipped',
				'total'         => '$80',
				'items'         => [
					[
						'image'   => HTTP_SERVER . 'image/product/product1.jpg',
						'name'    => 'Battery FPV 6S3P 12000mAh Li-ion Zeeepower',
						'model'   => 'ZEEE12000-10-6S',
						'price'   => '$35',
						'qty'     => 1,
						'amount'  => '$35',
					],
					[
						'image'   => HTTP_SERVER . 'image/product/product1.jpg',
						'name'    => 'Battery FPV 6S3P 12000mAh Li-ion Zeeepower',
						'model'   => 'ZEEE12000-10-6S',
						'price'   => '$35',
						'qty'     => 1,
						'amount'  => '$35',
					],
				],
				'delivery_address' => 'Kyiv, Nova Poshta branch № 1234',
				'recipient_name'   => 'James Thor',
				'recipient_phone'  => '+380962345678',
				'payment_method'   => 'Applepay',
				'shipping'         => '$10',
				'subtotal'         => '$70',
			],
			[
				'number'        => 'No. 158696',
				'datetime'      => 'January 10, 2025 12:44',
				'status'        => 'Processing',
				'status_class'  => 'processing',
				'total'         => '$80',
				'items'         => [
					[
						'image'   => HTTP_SERVER . 'image/product/product1.jpg',
						'name'    => 'Battery FPV 6S3P 12000mAh Li-ion Zeeepower',
						'model'   => 'ZEEE12000-10-6S',
						'price'   => '$35',
						'qty'     => 1,
						'amount'  => '$35',
					],
					[
						'image'   => HTTP_SERVER . 'image/product/product1.jpg',
						'name'    => 'Battery FPV 6S3P 12000mAh Li-ion Zeeepower',
						'model'   => 'ZEEE12000-10-6S',
						'price'   => '$35',
						'qty'     => 1,
						'amount'  => '$35',
					],
				],
				'delivery_address' => 'Kyiv, Nova Poshta branch № 1234',
				'recipient_name'   => 'James Thor',
				'recipient_phone'  => '+380962345678',
				'payment_method'   => 'Applepay',
				'shipping'         => '$10',
				'subtotal'         => '$70',
			],
		];

		$this->response->setOutput($this->load->view('account/history', $data));
	}
}
