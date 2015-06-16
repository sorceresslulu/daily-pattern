<?php
namespace BuilderExample\ItemizationBuilder;

use BuilderExample\ChampionItemization;

abstract class AbstractItemizationBuilder
{
    /**
     * @var ChampionItemization
     */
    private $championItemization;

    /**
     * @param ChampionItemization $championItemization
     */
    public function setChampionItemization($championItemization)
    {
        $this->championItemization = $championItemization;
    }

    /**
     * @return ChampionItemization
     */
    protected function getChampionItemization()
    {
        return $this->championItemization;
    }

    abstract public function setupItems();
    abstract public function setupTrinkets();
    abstract public function setupSummonerSpells();
}