<?php
require_once (__DIR__).'/../util.php';
require_once (__DIR__).'/../psr4.php';

$psr4AutoLoader = new Psr4AutoloaderClass();
$psr4AutoLoader->addNamespace('BridgeExample', (__DIR__.'/src/BridgeExample'));
$psr4AutoLoader->register();