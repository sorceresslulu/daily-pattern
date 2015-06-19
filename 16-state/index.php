<?php
require_once (__DIR__).'/../util.php';
require_once (__DIR__).'/../psr4.php';

$psr4AutoLoader = new Psr4AutoloaderClass();
$psr4AutoLoader->addNamespace('StateExample', (__DIR__.'/src/StateExample'));
$psr4AutoLoader->register();

function client(\StateExample\Subject $subject) {
    $subject->getState()->open();
    $subject->getState()->send("some message");
    $subject->getState()->close();
}

$subject = new \StateExample\Subject();
client($subject);

$subject->setState(new \StateExample\State\Opened());
client($subject);

$subject->setState(new \StateExample\State\Closed());
client($subject);