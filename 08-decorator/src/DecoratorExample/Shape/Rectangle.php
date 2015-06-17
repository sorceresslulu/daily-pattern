<?php
namespace DecoratorExample\Shape;

use DecoratorExample\Shape;

class Rectangle implements Shape
{
    public function draw()
    {
        \Util::println("Drawing a rectangle");
    }

}
