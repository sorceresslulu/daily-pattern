<?php
namespace DecoratorExample\ShapeDecorator;

use DecoratorExample\ShapeDecorator;

class RedBorder extends ShapeDecorator
{
    public function draw()
    {
        \Util::println("Draw a shape with red border");
        $this->shape->draw();
    }
}