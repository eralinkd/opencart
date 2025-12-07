<?php
namespace Opencart\Catalog\Controller\Auth;

class EmailSent extends \Opencart\System\Engine\Controller {
	public function index(): void {
		
		$this->document->setTitle('Email Sent | SkyFix');

		$data = [];
		$data['server'] = HTTP_SERVER;

    $data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$data['login_url'] = $this->url->link('auth/login');

		$this->response->setOutput($this->load->view('auth/email_sent', $data));
	}
}
