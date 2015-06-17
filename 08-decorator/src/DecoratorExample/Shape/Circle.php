<?php
namespace DecoratorExample\Shape;

use DecoratorExample\Shape;

class Circle implements Shape
{
    public function draw()
    {
        \Util::println("Drawing a circle");
    }

}
