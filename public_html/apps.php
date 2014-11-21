<?php

ini_set('display_errors', 1);

define('__ROOT_DIR__', __DIR__.'/../');
define('__APPS_DIR__', __DIR__.'/../Apps/');
define('__CORE_DIR__', __APPS_DIR__.'Core/');
define('__CONTROLLER_DIR__', __APPS_DIR__.'Controller/');
define('__MODEL_DIR__', __APPS_DIR__.'Model/');
define('__VIEWS_DIR__', __APPS_DIR__.'Views/');

require __CORE_DIR__ . 'Autoloader.php';

$loader = new Autoloader;
$loader->Register();

use Apps\Controller\HomeController as HomeController;

$home = new HomeController;

$home->indexAction();
