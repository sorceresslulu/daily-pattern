<?php
namespace CommandExample\Spells\Annie;

use CommandExample\SpellCommand;

class Disintegrate implements SpellCommand
{
    public function cast()
    {
        \Util::println("ACTIVE: Annie hurls a fireball at a target enemy unit, dealing magic damage on-hit.");
    }
}
