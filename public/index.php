<?php

define("ROOT", dirname(__DIR__));
define("PUBLIC", ROOT . '/public');
define("CONFIG", ROOT . '/config');
define("CORE", ROOT . '/core');
define("APP", ROOT . '/app');
define("CONTROLLERS", APP . '/controllers');
define("VIEWS", APP . '/views');
define("PATH", 'http://practica-mvc');

require CORE . '/funcs.php';

require CONFIG . '/routes.php';
require CORE . '/router.php';



