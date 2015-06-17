<?php
namespace DecoratorExample;

abstract class ShapeDecorator implements Shape
{
    /**
     * @var Shape
     */
    protected $shape;

    public function __construct(Shape $shape) {
        $this->shape = $shape;
    }
}