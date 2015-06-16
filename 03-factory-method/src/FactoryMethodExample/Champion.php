<?php
namespace FactoryMethodExample;

use FactoryMethodExample\MetaRole\MetaRoleInterface;

abstract class Champion
{
    public function report() {
        $metaRole = $this->fetchMetaRole();

        echo <<<REPORT

    ---
    Champion: {$this->getName()}
    MetaRole: {$metaRole->getRoleName()}
    Position: {$metaRole->getPosition()}
    ---

REPORT;

    }

    abstract public function getName();

    /**
     * @return MetaRoleInterface
     */
    abstract public function fetchMetaRole();
}