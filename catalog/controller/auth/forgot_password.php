<?php
namespace Opencart\Catalog\Controller\Auth;

class ForgotPassword extends \Opencart\System\Engine\Controller {
	public function index(): void {
		
		$this->document->setTitle('Forgot Password | SkyFix');

		$data = [];
		$data['server'] = HTTP_SERVER;

    $data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$data['email_sent_url'] = $this->url->link('auth/email_sent');

		$this->response->setOutput($this->load->view('auth/forgot_password', $data));
	}
}
