<?php
namespace Opencart\Catalog\Controller\Auth;

class NewPassword extends \Opencart\System\Engine\Controller {
	public function index(): void {
		
		$this->document->setTitle('New Password | SkyFix');

		$data = [];
		$data['server'] = HTTP_SERVER;

    $data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('auth/new-password', $data));
	}
}
