<?php
require_once (__DIR__).'/../util.php';
require_once (__DIR__).'/../psr4.php';

$psr4AutoLoader = new Psr4AutoloaderClass();
$psr4AutoLoader->addNamespace('BuilderExample', (__DIR__.'/src/BuilderExample'));
$psr4AutoLoader->register();

Util::println("Burst and CDR build:");
$burstAndCdrBuild = new \BuilderExample\ChampionItemization(new \BuilderExample\ItemizationBuilder\BurstAndCDR());
$burstAndCdrBuild->build();
$burstAndCdrBuild->report();

Util::println("AP Build:");
$apBuilder = new \BuilderExample\ChampionItemization(new \BuilderExample\ItemizationBuilder\APBuild());
$apBuilder->build();
$apBuilder->report();