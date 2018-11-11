<?php

//unset($_SERVER['PHP_AUTH_USER']);

include __DIR__ . '/lib/bitrix_composer.php';

$application = new BitrixComposer();
$application->run();
