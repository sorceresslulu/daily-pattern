<?php
namespace BuilderExample;

use BuilderExample\ItemizationBuilder\AbstractItemizationBuilder;

class ChampionItemization
{
    /**
     * @var AbstractItemizationBuilder
     */
    private $itemizationBuilder;

    private $items = array();
    private $trinket;
    private $summonerSpell1;
    private $summonerSpell2;

    public function __construct(AbstractItemizationBuilder $itemizationBuilder) {
        $this->itemizationBuilder = $itemizationBuilder;
        $this->itemizationBuilder->setChampionItemization($this);
    }

    public function build() {
        $this->itemizationBuilder->setupItems();
        $this->itemizationBuilder->setupSummonerSpells();
        $this->itemizationBuilder->setupTrinkets();
    }

    public function report() {
        $items = implode(', ', $this->items);

        echo <<<REPORT
    Items: {$items}
    Trinket: {$this->trinket}
    Summoner Spell 1: {$this->summonerSpell1}
    Summoner Spell 2: {$this->summonerSpell2}


REPORT;
    }

    public function setItems(array $items) {
        $this->items = $items;
    }

    public function setTrinket($trinket) {
        $this->trinket = $trinket;
    }

    /**
     * @param mixed $summonerSpell1
     */
    public function setSummonerSpell1($summonerSpell1)
    {
        $this->summonerSpell1 = $summonerSpell1;
    }

    /**
     * @param mixed $summonerSpell2
     */
    public function setSummonerSpell2($summonerSpell2)
    {
        $this->summonerSpell2 = $summonerSpell2;
    }
}