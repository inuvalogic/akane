<?php

ini_set('display_errors', 1);

define('__ROOT_DIR__', __DIR__.'/../');
define('__APPS_DIR__', __DIR__.'/../Apps/');
define('__CORE_DIR__', __APPS_DIR__.'Core/');
define('__CONTROLLER_DIR__', __APPS_DIR__.'Controller/');
define('__MODEL_DIR__', __APPS_DIR__.'Model/');
define('__HELPER_DIR__', __APPS_DIR__.'Helper/');
define('__VIEWS_DIR__', __APPS_DIR__.'Views/');
define('__CONFIG_DIR__', __APPS_DIR__.'Config/');

if ($_SERVER['HTTP_HOST']!="localhost") {
    define('__SITEPATH__', '/');
} else {
    define('__SITEPATH__', '/akane/public_html/');
}

define('__SITEURL__', 'http://'.$_SERVER['HTTP_HOST'].__SITEPATH__);

require __CORE_DIR__ . 'Autoloader.php';
require __HELPER_DIR__ . 'main.php';

$loader = new Autoloader;
$loader->Register();

use Apps\Core\Database as Database;
use Apps\Core\Router as Router;

Database::init();
Router::init();
