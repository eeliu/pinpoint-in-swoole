<?php

require_once __DIR__."/vendor/autoload.php";
#################################################
define('AOP_CACHE_DIR',__DIR__.'/Cache/');
define('PLUGINS_DIR', __DIR__ . '/Plugins/');
//define('USER_DEFINED_CLASS_MAP_IMPLEMENT',"Plugins\Framework\app\ClassMapInFile");
define('PER_REQ_CLASS_NAME','Plugins\Framework\Swoole\Http\Server\PerReqPlugin');
define('APPLICATION_NAME','APP-2');
define('APPLICATION_ID','app-2');
define("PINPOINT_ENV",'dev');
require_once __DIR__. '/vendor/naver/pinpoint-php-aop/auto_pinpointed.php';

#################################################

use app\HttpServer;
$server = new HttpServer();
$server->init();
$server->run();

