<?php
namespace ProxyExample\Proxy;

use ProxyExample\Features;

class ImInHome implements Features
{
    /**
     * @var Features
     */
    private $features;

    public function __construct(Features $features) {
        $this->features = $features;
    }

    public function createNewDocument()
    {
        \Util::println("I'm in home, no more work for me!");
    }

    public function destroyEnemyInhibitor()
    {
        $this->features->destroyEnemyInhibitor();
    }

    public function useHeal()
    {
        $this->features->useHeal();
    }
}