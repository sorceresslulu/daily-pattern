<?php
namespace FactoryMethodExample\Champions;

use FactoryMethodExample\Champion;
use FactoryMethodExample\MetaRole\ADCarry;
use FactoryMethodExample\MetaRole\MetaRoleInterface;

class Jinx extends Champion
{
    public function getName()
    {
        return "Jinx";
    }

    /**
     * @return MetaRoleInterface
     */
    public function fetchMetaRole()
    {
        return new ADCarry();
    }
}