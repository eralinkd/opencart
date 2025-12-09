<?php
namespace Opencart\Catalog\Controller\Common;
/**
 * Class Header
 *
 * @package Opencart\Catalog\Controller\Common
 */
class Header extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return string
	 */
	public function index(): string {
		$data['title'] = $this->document->getTitle();
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();

		// home page styles
		$data['reset'] = 'catalog/view/stylesheet/reset.css';
		$data['index'] = 'catalog/view/stylesheet/index.css';
		$data['app_header'] = 'catalog/view/stylesheet/app_header.css';
		$data['page_home'] = 'catalog/view/stylesheet/home.css';
		$data['app_footer'] = 'catalog/view/stylesheet/app_footer.css';

		// product page styles
		$data['page_product'] = 'catalog/view/stylesheet/product/product.css';

		// cart page styles
		$data['page_cart'] = 'catalog/view/stylesheet/cart/cart.css';

		// auth page styles
		$data['page_login'] = 'catalog/view/stylesheet/auth/login.css';
		$data['page_register'] = 'catalog/view/stylesheet/auth/register.css';
		$data['page_forgot_password'] = 'catalog/view/stylesheet/auth/forgot-password.css';
		$data['page_email_sent'] = 'catalog/view/stylesheet/auth/email-sent.css';
		$data['page_new_password'] = 'catalog/view/stylesheet/auth/new-password.css';

		// account page styles
		$data['page_account_general'] = 'catalog/view/stylesheet/account/general.css';
		$data['page_account_history'] = 'catalog/view/stylesheet/account/history.css';

		// checkout page styles
		$data['page_checkout_new'] = 'catalog/view/stylesheet/checkout/new.css';
		$data['page_checkout_existing'] = 'catalog/view/stylesheet/checkout/existing.css';

		$this->document->addScript('catalog/view/javascript/components/ui/Button.js');
		$this->document->addScript('catalog/view/javascript/components/ui/ButtonSecondary.js');
		$this->document->addScript('catalog/view/javascript/components/ui/Input.js');

		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();

		$data['home'] = $this->url->link('common/home');
		
		if (isset($this->request->get['route'])) {
			$route = (string)$this->request->get['route'];
		} else {
			$route = 'common/home';
		}
		
		$pos = strrpos($route, '.');
		if ($pos !== false) {
			$route = substr($route, 0, $pos);
		}
		
		$data['is_main_page'] = ($route === 'common/home');
		$data['is_product_page'] = ($route === 'product/product');
		$data['is_cart_page'] = ($route === 'cart/cart');
		$data['is_login_page'] = ($route === 'auth/login');
		$data['is_register_page'] = ($route === 'auth/register');
		$data['is_forgot_password_page'] = ($route === 'auth/forgot_password');
		$data['is_email_sent_page'] = ($route === 'auth/email_sent');
		$data['is_new_password_page'] = ($route === 'auth/new_password');
		$data['is_account_general_page'] = ($route === 'account/general');
		$data['is_account_history_page'] = ($route === 'account/history');
		$data['is_checkout_new_page'] = ($route === 'checkout/new_customer');
		$data['is_checkout_existing_page'] = ($route === 'checkout/existing_customer');

		$data['server'] = HTTP_SERVER;
		$data['profile_url'] = $this->url->link('account/general');
		$data['cart_url'] = $this->url->link('cart/cart');
		$data['info_links'] = [
			[
				'label' => 'About Us',
				'href'  => '#'
			],
			[
				'label' => 'Shipping & Payment',
				'href'  => '#'
			],
			[
				'label' => 'Contacts',
				'href'  => '#'
			],
		];

		
		$data['UIButton'] = $this->load->view('common/components/ui/Button', []);
		$data['UIButtonSecondary'] = $this->load->view('common/components/ui/ButtonSecondary', []);
		$data['UIInput'] = $this->load->view('common/components/ui/Input', []);

		return $this->load->view('common/header', $data);
	}
}
