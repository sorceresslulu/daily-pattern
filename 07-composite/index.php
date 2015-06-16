<?php
require_once (__DIR__).'/../util.php';
require_once (__DIR__).'/../psr4.php';

$psr4AutoLoader = new Psr4AutoloaderClass();
$psr4AutoLoader->addNamespace('CompositeExample', (__DIR__.'/src/CompositeExample'));
$psr4AutoLoader->register();

function Client(\CompositeExample\PingInterface $ping) {
    $ping->ping();
}

Client(new \CompositeExample\SinglePing());

$manyPings = new \CompositeExample\ManyPings();
$manyPings->addPing(new \CompositeExample\SinglePing());
$manyPings->addPing(new \CompositeExample\SinglePing());
$manyPings->addPing(new \CompositeExample\SinglePing());

Client($manyPings);