<?php
namespace FlyweightExample;

class Glyph
{
    private $code;

    public function __construct($code) {
        $this->code = $code;
    }

    public function toString() {
        return $this->code;
    }
}