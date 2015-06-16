<?php
namespace BuilderExample\ItemizationBuilder;

class APBuild extends AbstractItemizationBuilder
{
    public function setupItems()
    {
        $this->getChampionItemization()->setItems(array(
            "Stalker's Blade - Magus",
            "Luden's Echo",
            "Rabadon's Deathcap",
            "Lich Bane",
            "Rylai's Crystal Scepter",
            "Void Staff"
        ));
    }

    public function setupTrinkets()
    {
        $this->getChampionItemization()->setTrinket("red");
    }

    public function setupSummonerSpells()
    {
        $this->getChampionItemization()->setSummonerSpell1("Flash");
        $this->getChampionItemization()->setSummonerSpell2("Smite");
    }
}