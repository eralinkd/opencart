<?php
namespace Opencart\Catalog\Controller\Startup;
/**
 * Class Session
 *
 * @package Opencart\Catalog\Controller\Startup
 */
class Session extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @throws \Exception
	 *
	 * @return void
	 */
	public function index(): void {
		// Check if session is already set (from framework.php if session_autostart is true)
		if (!$this->registry->has('session')) {
			$session = new \Opencart\System\Library\Session($this->config->get('session_engine'), $this->registry);
			$this->registry->set('session', $session);
		} else {
			$session = $this->registry->get('session');
		}

		$session_name = $this->config->get('session_name') ?: 'OCSESSID';
		
		if (isset($this->request->cookie[$session_name])) {
			$session_id = $this->request->cookie[$session_name];
		} else {
			$session_id = '';
		}

		$session->start($session_id);

		// Update the session lifetime
		if ($this->config->get('config_session_expire')) {
			$this->config->set('session_expire', $this->config->get('config_session_expire'));
		}

		// Require higher security for session cookies
		$option = [
			'expires'  => $this->config->get('config_session_expire') ? time() + (int)$this->config->get('config_session_expire') : 0,
			'path'     => $this->config->get('session_path'),
			'secure'   => isset($this->request->server['HTTPS']) ? $this->request->server['HTTPS'] : false,
			'httponly' => false,
			'SameSite' => $this->config->get('config_session_samesite') ?: 'Strict'
		];

		setcookie($session_name, $session->getId(), $option);
	}
}

