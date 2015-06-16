<?php
namespace AdapterExample;

class Minion implements FighterInterface
{
    public function attack()
    {
        \Util::println("Minion now is attacking enemies");
    }

    public function moveTo($x, $y)
    {
        \Util::println("Minion moved to $x, $y");
    }
}