<?php
require_once (__DIR__).'/../util.php';
require_once (__DIR__).'/../psr4.php';

$psr4AutoLoader = new Psr4AutoloaderClass();
$psr4AutoLoader->addNamespace('CommandExample', (__DIR__.'/src/CommandExample'));
$psr4AutoLoader->register();

function bindEvelynn(\CommandExample\UI $ui) {
    $ui->rebind(
        new \CommandExample\Spells\Evelynn\HateSpike(),
        new \CommandExample\Spells\Evelynn\DarkFrenzy(),
        new \CommandExample\Spells\Evelynn\Ravage(),
        new \CommandExample\Spells\Evelynn\AgonyEmbrace()
    );
}

function bindAnnie(\CommandExample\UI $ui) {
    $ui->rebind(
        new \CommandExample\Spells\Annie\Disintegrate(),
        new \CommandExample\Spells\Annie\Incinerate(),
        new \CommandExample\Spells\Annie\MoltenShield(),
        new \CommandExample\Spells\Annie\Tibbers()
    );
}

$ui = new \CommandExample\UI();

bindAnnie($ui);
$ui->castQ();
$ui->castW();
$ui->castE();
$ui->castR();

bindEvelynn($ui);
$ui->castQ();
$ui->castW();
$ui->castE();
$ui->castR();