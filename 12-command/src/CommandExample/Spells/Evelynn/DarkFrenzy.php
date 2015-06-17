<?php
namespace CommandExample\Spells\Evelynn;

use CommandExample\SpellCommand;

class DarkFrenzy implements SpellCommand
{
    public function cast()
    {
        \Util::println("ACTIVE: Evelynn removes all slows affecting her, gains increased movement speed for 3 seconds and ignores unit collision. Champion kills and assists refresh Dark Frenzy's cooldown.");
    }
}
