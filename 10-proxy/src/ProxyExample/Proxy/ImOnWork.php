<?php
namespace ProxyExample\Proxy;

use ProxyExample\Features;

class ImOnWork implements Features
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
        $this->features->createNewDocument();
    }

    public function destroyEnemyInhibitor()
    {
        \Util::println('No games for you');
    }

    public function useHeal()
    {
        \Util::println('No games for you');
    }
}