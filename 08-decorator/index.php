<?php
require_once (__DIR__).'/../util.php';
require_once (__DIR__).'/../psr4.php';

$psr4AutoLoader = new Psr4AutoloaderClass();
$psr4AutoLoader->addNamespace('DecoratorExample', (__DIR__.'/src/DecoratorExample'));
$psr4AutoLoader->register();

function client(\DecoratorExample\Shape $shape) {
    $shape->draw();
}

$rectangle = new \DecoratorExample\Shape\Rectangle();
client($rectangle);

$rectangleWithRedBorder = new \DecoratorExample\ShapeDecorator\RedBorder($rectangle);
client($rectangleWithRedBorder);

$circle = new \DecoratorExample\Shape\Circle();
client($circle);

$circleWithGreenBorder = new \DecoratorExample\ShapeDecorator\GreenBorder($circle);
client($circleWithGreenBorder);

$whatAMess = new \DecoratorExample\ShapeDecorator\RedBorder($circleWithGreenBorder);
client($whatAMess);