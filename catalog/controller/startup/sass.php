<?php
namespace Opencart\Catalog\Controller\Startup;
/**
 * Class Sass
 *
 * @package Opencart\Catalog\Controller\Startup
 */
class Sass extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @throws \Exception\ScssPhp\ScssPhp\Exception\SassException
	 *
	 * @return void
	 */
	public function index(): void {
		$files = glob(DIR_APPLICATION . 'view/stylesheet/*.scss');

		if ($files) {
			foreach ($files as $file) {
				$filename = basename($file, '.scss');
				if ($filename === 'variables') {
					continue;
				}

				$stylesheet = DIR_APPLICATION . 'view/stylesheet/' . $filename . '.css';

				if (!is_file($stylesheet) || !$this->config->get('developer_sass')) {
					$scss_content = file_get_contents($file);
					
					$scss = new \ScssPhp\ScssPhp\Compiler();
					$scss->setImportPaths(DIR_APPLICATION . 'view/stylesheet/');

					$output = $scss->compileString($scss_content)->getCss();

					$handle = fopen($stylesheet, 'w');

					flock($handle, LOCK_EX);

					fwrite($handle, $output);

					fflush($handle);

					flock($handle, LOCK_UN);

					fclose($handle);
				}
			}
		}
	}
}

