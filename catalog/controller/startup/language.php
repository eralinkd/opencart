<?php
namespace Opencart\Catalog\Controller\Startup;
/**
 * Class Language
 *
 * @package Opencart\Catalog\Controller\Startup
 */
class Language extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		// Language
		$code = $this->config->get('language_code');
		
		$this->load->language('default');
		$this->load->language($code);
	}
}

