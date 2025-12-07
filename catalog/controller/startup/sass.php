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
		$base = DIR_APPLICATION . 'view/stylesheet/';

		$directory = new \RecursiveDirectoryIterator($base, \FilesystemIterator::SKIP_DOTS);
		$iterator = new \RecursiveIteratorIterator($directory);

		foreach ($iterator as $file_info) {
			if (!$file_info->isFile() || $file_info->getExtension() !== 'scss') {
				continue;
			}

			$filename = $file_info->getBasename('.scss');

			if ($filename === 'variables') {
				continue;
			}

			$file = $file_info->getPathname();
			$stylesheet = $file_info->getPath() . '/' . $filename . '.css';

			if (!is_file($stylesheet) || !$this->config->get('developer_sass')) {
				$scss_content = file_get_contents($file);

				$scss = new \ScssPhp\ScssPhp\Compiler();
				$scss->setImportPaths([
					$file_info->getPath() . '/',
					$base
				]);

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

