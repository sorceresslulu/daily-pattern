<?php
namespace PrototypeExample;

use PrototypeExample\Minions\Minion;

class Inhibitor
{
    private $prototypes = array();
    private $inhibitorName;

    public function __construct(
        $inhibitorName,
        Minion $meleeMinion,
        Minion $rangedMinion,
        Minion $siegeMinion
    ) {
        $this->inhibitorName = $inhibitorName;
        $this->prototypes = array(
            'melee' => $meleeMinion,
            'ranged' => $rangedMinion,
            'siege' => $siegeMinion
        );
    }

    public function spawnMeleeMinion() {
        /** @var Minion $minion */
        $minion = clone $this->prototypes['melee'];

        \Util::println("{$this->inhibitorName} spawn a {$minion->getName()}!");

        return $minion;
    }

    public function spawnRangedMinion() {
        /** @var Minion $minion */
        $minion = clone $this->prototypes['ranged'];

        \Util::println("{$this->inhibitorName} spawn a {$minion->getName()}!");

        return $minion;
    }

    public function spawnSiegeMinion() {
        /** @var Minion $minion */
        $minion = clone $this->prototypes['siege'];

        \Util::println("{$this->inhibitorName} spawn a {$minion->getName()}!");

        return $minion;
    }
}