<?php
require_once (__DIR__).'/../util.php';
require_once (__DIR__).'/../psr4.php';

$psr4AutoLoader = new Psr4AutoloaderClass();
$psr4AutoLoader->addNamespace('PrototypeExample', (__DIR__.'/src/PrototypeExample'));
$psr4AutoLoader->register();

$blueSideInhibitor = new \PrototypeExample\Inhibitor(
    'Blue side inhibitor',
    new \PrototypeExample\Minions\BlueSide\MeleeMinion(),
    new \PrototypeExample\Minions\BlueSide\RangedMinion(),
    new \PrototypeExample\Minions\BlueSide\SiegeMinion()
);

$purpleSideInhibitor = new \PrototypeExample\Inhibitor(
    'Purple side inhibitor',
    new \PrototypeExample\Minions\PurpleSide\MeleeMinion(),
    new \PrototypeExample\Minions\PurpleSide\RangedMinion(),
    new \PrototypeExample\Minions\PurpleSide\SiegeMinion()
);

$blueSideInhibitor->spawnMeleeMinion();
$blueSideInhibitor->spawnMeleeMinion();
$blueSideInhibitor->spawnMeleeMinion();
$blueSideInhibitor->spawnRangedMinion();
$blueSideInhibitor->spawnRangedMinion();
$blueSideInhibitor->spawnSiegeMinion();


$purpleSideInhibitor->spawnMeleeMinion();
$purpleSideInhibitor->spawnMeleeMinion();
$purpleSideInhibitor->spawnMeleeMinion();
$purpleSideInhibitor->spawnRangedMinion();
$purpleSideInhibitor->spawnRangedMinion();
$purpleSideInhibitor->spawnSiegeMinion();