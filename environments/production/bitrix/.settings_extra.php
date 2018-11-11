<?php

return [
	'exception_handling' => [
		'value' => [
			'debug' => false,
			'handled_errors_types' => 4437,
			'exception_errors_types' => 4437,
			'ignore_silence' => false,
			'assertion_throws_exception' => true,
			'assertion_error_type' => 256,
			'log' => NULL,
		],
	],
	'connections' => [
		'value' => [
			'default' => [
				'host' => $_ENV['DB_HOST'] . ':' . $_ENV['DB_PORT'],
				'database' => $_ENV['DB_NAME'],
				'login' => $_ENV['DB_USER'],
				'password' => $_ENV['DB_PASSWORD'],
				'className' => '\\Bitrix\\Main\\DB\\MysqliConnection',
				'options' => 2,
			],
		],
	]
];
