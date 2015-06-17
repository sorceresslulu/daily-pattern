<?php
namespace CommandExample\Spells\Evelynn;

use CommandExample\SpellCommand;

class Ravage implements SpellCommand
{
    public function cast()
    {
        \Util::println("ACTIVE: Evelynn slashes a target twice, dealing physical damage and applying on-hit effects with each strike. Evelynn then gains bonus attack speed for 3 seconds.");
    }
}
