<?php

use cms\App;

require_once '../config/init.php';
require_once LIBS . '/functions.php';
require_once CONF . '/routes.php';

$app = new App();


debug(\cms\Router::getRoutes());

