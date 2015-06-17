<?php
namespace DecoratorExample\ShapeDecorator;

use DecoratorExample\ShapeDecorator;

class GreenBorder extends ShapeDecorator
{
    public function draw()
    {
        \Util::println("Draw a shape with green border");
        $this->shape->draw();
    }
}