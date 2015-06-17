<?php
require_once (__DIR__).'/../util.php';
require_once (__DIR__).'/../psr4.php';

$psr4AutoLoader = new Psr4AutoloaderClass();
$psr4AutoLoader->addNamespace('ProxyExample', (__DIR__.'/src/ProxyExample'));
$psr4AutoLoader->register();

function client(\ProxyExample\Features $features) {
    $features->createNewDocument();
    $features->destroyEnemyInhibitor();
    $features->useHeal();
}

$features = new \ProxyExample\FeaturesImplementation();
client($features);

$proxyOnWork = new \ProxyExample\Proxy\ImOnWork($features);
client($proxyOnWork);

$proxyInHome = new \ProxyExample\Proxy\ImInHome($features);
client($proxyInHome);