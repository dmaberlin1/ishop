<?php

if(PHP_MAJOR_VERSION<8){
    die("Необходима версия php >=8");
}

require_once dirname(__DIR__).'/config/init.php';
require_once CONFIG.'/routes.php';
require_once HELPERS.'/functions.php';


new \dmadev\App();





echo \dmadev\App::$app->getProperty('pagination');
\dmadev\App::$app->setProperty('testKey','testValue');
var_dump(\dmadev\App::$app->getProperty());
debug(\dmadev\Router::getRoutes());