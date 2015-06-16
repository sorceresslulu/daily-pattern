<?php
namespace FactoryMethodExample\Champions;

use FactoryMethodExample\Champion;
use FactoryMethodExample\MetaRole\MetaRoleInterface;
use FactoryMethodExample\MetaRole\Midlane;

class Annie extends Champion
{
    public function getName()
    {
        return "Annie";
    }

    /**
     * @return MetaRoleInterface
     */
    public function fetchMetaRole()
    {
        return new Midlane();
    }
}