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
		$data['server'] = HTTP_SERVER;
		
		$data['UIButton'] = $this->load->view('common/components/ui/Button', []);
		$data['UIButtonSecondary'] = $this->load->view('common/components/ui/ButtonSecondary', []);
		$data['UIInput'] = $this->load->view('common/components/ui/Input', []);

		return $this->load->view('common/header', $data);
	}
}
