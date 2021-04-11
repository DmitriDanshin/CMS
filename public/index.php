<?php

use cms\App;

require_once '../config/init.php';
require_once LIBS . '/functions.php';

$app = new App();

throw new Exception('Страница не найдена', 404);