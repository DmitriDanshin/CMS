<?php

use cms\App;

require_once '../config/init.php';
require_once LIBS . '/functions.php';

$app = new App();

debug(App::$app->getProperties());