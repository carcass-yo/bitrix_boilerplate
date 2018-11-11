<?php

use Bitrix\Main\Application;

class BitrixComposer {
	public function __construct() {
		$autoload = Application::getDocumentRoot() . '/vendor/autoload.php';

		// Load composer modules
		if (file_exists($autoload)) {
			require_once $autoload;
		}

		// Enable oscarotero/env support if installed
		if (is_callable(['Env', 'init'])) {
			Env::init();
		}
	}

	public function run() {
	}
}
