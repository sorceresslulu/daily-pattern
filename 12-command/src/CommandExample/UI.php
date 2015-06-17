<?php
namespace CommandExample;

class UI
{
    /**
     * @var SpellCommand
     */
    private $spellQ;

    /**
     * @var SpellCommand
     */
    private $spellW;

    /**
     * @var SpellCommand
     */
    private $spellE;

    /**
     * @var SpellCommand
     */
    private $spellR;

    public function rebind(
        SpellCommand $spellQ,
        SpellCommand $spellW,
        SpellCommand $spellE,
        SpellCommand $spellR
    ) {
        $this->spellQ = $spellQ;
        $this->spellW = $spellW;
        $this->spellE = $spellE;
        $this->spellR = $spellR;
    }

    public function castQ() {
        $this->spellQ->cast();
    }

    public function castW() {
        $this->spellW->cast();
    }

    public function castE() {
        $this->spellE->cast();
    }

    public function castR() {
        $this->spellR->cast();
    }
}