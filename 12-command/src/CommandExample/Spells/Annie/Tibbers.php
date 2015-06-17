<?php
namespace CommandExample\Spells\Annie;

use CommandExample\SpellCommand;

class Tibbers implements SpellCommand
{
    public function cast()
    {
        \Util::println("ACTIVE: Annie summons TibbersSquare.png Tibbers to the target location in a burst of flame, dealing magic damage to enemies within 290-range. Tibbers remains on the field as a controllable minion for up to 45 seconds.");
    }
}
