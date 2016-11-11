<?php

require __DIR__ . '/../source/eOS/Server/RestServer/RestServer.php';
require 'TestController.php';

$server = new \eOS\Server\RestServer\RestServer('debug');
$server->addClass('TestController');
$server->handle();
