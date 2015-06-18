<?php
require_once (__DIR__).'/../util.php';
require_once (__DIR__).'/../psr4.php';

$psr4AutoLoader = new Psr4AutoloaderClass();
$psr4AutoLoader->addNamespace('VisitorExample', (__DIR__.'/src/VisitorExample'));
$psr4AutoLoader->register();

$elementA = new \VisitorExample\ElementA();
$elementB = new \VisitorExample\ElementB();

$visitorPrintHello = new \VisitorExample\VisitorPrintHello();

$elementA->accept($visitorPrintHello);
$elementA->accept($visitorPrintHello);