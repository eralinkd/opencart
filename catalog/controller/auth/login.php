<?php
namespace Opencart\Catalog\Controller\Auth;

class Login extends \Opencart\System\Engine\Controller {
	public function index(): void {
		
		$this->document->setTitle('Login | SkyFix');

		$data = [];
		$data['server'] = HTTP_SERVER;

    $data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$data['forgot_password_url'] = $this->url->link('auth/forgot_password');
		$data['register_url'] = $this->url->link('auth/register');

		$this->response->setOutput($this->load->view('auth/login', $data));
	}
}
