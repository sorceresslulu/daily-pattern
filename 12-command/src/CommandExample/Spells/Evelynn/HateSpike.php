<?php
namespace CommandExample\Spells\Evelynn;

use CommandExample\SpellCommand;

class HateSpike implements SpellCommand
{
    public function cast()
    {
        \Util::println("ACTIVE: Evelynn fires a line of spikes through a nearby enemy, dealing magic damage to all enemy units in its path.");
    }
}
