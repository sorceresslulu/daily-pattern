<?php
namespace CommandExample\Spells\Annie;

use CommandExample\SpellCommand;

class MoltenShield implements SpellCommand
{
    public function cast()
    {
        \Util::println("ACTIVE: Annie grants herself a shield of fire for 5 seconds that grants bonus armor and magic resistance as well as dealing magic damage to enemies each time they attack the shield.");
    }
}
