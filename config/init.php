<?php

define("DEBUG",1);
define("ROOT",dirname(__DIR__));
define("WWW",ROOT .'/public');
define("APP",ROOT .'/app');
define("CORE",ROOT .'/vendor/dmadev');
define("HELPERS",ROOT .'/vendor/dmadev/helpers');
define("CACHE",ROOT .'/tmp/cache');
define("LOGS",ROOT .'/tmp/logs');
define("CONFIG",ROOT .'/config');
define("LAYOUT",'ishop');
//define("PATH",'http://ishop');
define("PATH",'http://localhost:4000)');
define("ADMIN",'http://localhost:4000/admin)');
define("NO_IMAGE",'uploads/no_image.jpg');

require_once ROOT.'/vendor/autoload.php';