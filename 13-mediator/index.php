<?php
require_once (__DIR__).'/../util.php';
require_once (__DIR__).'/../psr4.php';

$psr4AutoLoader = new Psr4AutoloaderClass();
$psr4AutoLoader->addNamespace('MediatorExample', (__DIR__.'/src/MediatorExample'));
$psr4AutoLoader->register();

$button = new \MediatorExample\Elements\Button();
$textInput = new \MediatorExample\Elements\TextInput();

$widgetExample1 = new \MediatorExample\WidgetExample1(
    $button,
    $textInput
);

$textInput->setValue("Annie is awesome!");
$textInput->enter();