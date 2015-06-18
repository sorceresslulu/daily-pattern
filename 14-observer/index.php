<?php
require_once (__DIR__).'/../util.php';
require_once (__DIR__).'/../psr4.php';

$psr4AutoLoader = new Psr4AutoloaderClass();
$psr4AutoLoader->addNamespace('ObserverExample', (__DIR__.'/src/ObserverExample'));
$psr4AutoLoader->register();

$subject = new \ObserverExample\Subject();
$subject->attachObserver(new \ObserverExample\MailObserver());
$subject->attachObserver(new \ObserverExample\ArchiveObserver());

$subject->setMessage("ban annie pls");