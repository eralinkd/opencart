<?php
namespace Opencart\Catalog\Controller\Startup;
/**
 * Class Error
 *
 * @package Opencart\Catalog\Controller\Startup
 */
class Error extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$this->registry->set('error', new \Opencart\System\Library\Log($this->config->get('error_filename')));
	}
}

