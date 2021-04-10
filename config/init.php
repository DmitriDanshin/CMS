<?php

define("DEBUG", 1); // 1 - dev, 0 - prod

define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/cms/core');
define("LIBS", ROOT . '/vendor/cms/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONF", ROOT . '/config');
define("LAYOUT", 'default');

// https://localhost/CMS/public/index.php
$app_path = "https://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
$app_path = preg_replace("#[^/]+$#", '', $app_path);
$app_path = str_replace('/public/', '', $app_path);

define('PATH', $app_path);
define('ADMIN', PATH . '/admin');

require_once './vendor/autoload.php';