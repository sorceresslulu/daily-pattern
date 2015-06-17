<?php
namespace CommandExample\Spells\Annie;

use CommandExample\SpellCommand;

class Incinerate implements SpellCommand
{
    public function cast()
    {
        \Util::println("ACTIVE: Annie scorches all enemies in a 50° conic area in front of her with fire, dealing magic damage.");
    }
}
