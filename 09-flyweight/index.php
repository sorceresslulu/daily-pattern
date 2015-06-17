<?php
require_once (__DIR__).'/../util.php';
require_once (__DIR__).'/../psr4.php';

$psr4AutoLoader = new Psr4AutoloaderClass();
$psr4AutoLoader->addNamespace('FlyweightExample', (__DIR__.'/src/FlyweightExample'));
$psr4AutoLoader->register();

$glyphFlyweightFactory = new \FlyweightExample\GlyphFlyweightFactory();
$stringBuilder = new \FlyweightExample\StringBuilder($glyphFlyweightFactory);

$stringBuilder->buildString("Annie");
$glyphFlyweightFactory->report();

$stringBuilder->buildString("Jinx");
$glyphFlyweightFactory->report();