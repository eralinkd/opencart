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

		$this->response->setOutput($this->load->view('account/history', $data));
	}
}
