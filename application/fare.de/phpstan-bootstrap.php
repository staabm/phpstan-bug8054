<?php

define('APP_ROOT', dirname(__DIR__, 2));
define('APP_NAME', basename(__DIR__));
define('APP_PATH', APP_ROOT.'/application/'.APP_NAME);
define('PUBLIC_PATH', APP_ROOT.'/public/'.APP_NAME);
define('APPLICATION_ROOT', APP_ROOT);

$_SERVER['APP_MODE'] = 'development';
define('APP_MODE', $_SERVER['APP_MODE']);

