<?php
namespace CommandExample\Spells\Evelynn;

use CommandExample\SpellCommand;

class AgonyEmbrace implements SpellCommand
{
    public function cast()
    {
        \Util::println("ACTIVE: Evelynn impales all enemy units in target 250-radius area, dealing magic damage equal to a percentage of their current health and Slow icon slowing their movement speed for 2 seconds.");
    }
}
