<?php
require_once (__DIR__).'/../util.php';
require_once (__DIR__).'/../psr4.php';

$psr4AutoLoader = new Psr4AutoloaderClass();
$psr4AutoLoader->addNamespace('ChainOfResponsibilityExample', (__DIR__.'/src/ChainOfResponsibilityExample'));
$psr4AutoLoader->register();

$infoLogger = new \ChainOfResponsibilityExample\Logger\InfoLogger();
$errorLogger = new \ChainOfResponsibilityExample\Logger\ErrorLogger();
$verboseLogger = new \ChainOfResponsibilityExample\Logger\VerboseLogger();

$infoLogger->setNexLogger($errorLogger);
$errorLogger->setNexLogger($verboseLogger);

$infoLogger->log("Some info message", \ChainOfResponsibilityExample\Logger::LEVEL_INFO);
$infoLogger->log("Some error happerns", \ChainOfResponsibilityExample\Logger::LEVEL_ERROR);
$infoLogger->log("Fatal error", \ChainOfResponsibilityExample\Logger::LEVEL_FATAL);