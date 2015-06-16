<?php
require_once (__DIR__).'/../util.php';
require_once (__DIR__).'/../psr4.php';

$psr4AutoLoader = new Psr4AutoloaderClass();
$psr4AutoLoader->addNamespace('FactoryMethodExample', (__DIR__.'/src/FactoryMethodExample'));
$psr4AutoLoader->register();

$annie = new \FactoryMethodExample\Champions\Annie();
$annie->report();

$jinx = new \FactoryMethodExample\Champions\Jinx();
$jinx->report();