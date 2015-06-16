<?php
namespace AdapterExample;

interface FighterInterface
{
    public function attack();
    public function moveTo($x, $y);
}