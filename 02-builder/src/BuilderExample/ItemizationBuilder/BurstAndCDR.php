<?php
namespace BuilderExample\ItemizationBuilder;

class BurstAndCDR extends AbstractItemizationBuilder
{
    public function setupItems()
    {
        $this->getChampionItemization()->setItems(array(
            "Stalker's Blade - Magus",
            "Iceborn Gauntlet",
            "Blade of Ruined King",
            "Randuin's Omen",
            "Ninja Tabi - Homeguard",
            "Luden's Echo"
        ));
    }

    public function setupTrinkets()
    {
        $this->getChampionItemization()->setTrinket("yellow");
    }

    public function setupSummonerSpells()
    {
        $this->getChampionItemization()->setSummonerSpell1("Ignite");
        $this->getChampionItemization()->setSummonerSpell2("Flash");
    }

}