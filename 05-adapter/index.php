<?php
require_once (__DIR__).'/../util.php';
require_once (__DIR__).'/../psr4.php';

$psr4AutoLoader = new Psr4AutoloaderClass();
$psr4AutoLoader->addNamespace('AdapterExample', (__DIR__.'/src/AdapterExample'));
$psr4AutoLoader->register();

function scenario(\AdapterExample\FighterInterface $fighter)
{
    $fighter->attack();
    $fighter->moveTo(10.50, 20.77);
}

$minion = new \AdapterExample\Minion();
$vendor = new \AdapterExample\Vendor();

$vendor->greetings();

scenario($minion);
scenario(new \AdapterExample\VendorToFighterInterfaceAdapter($vendor));