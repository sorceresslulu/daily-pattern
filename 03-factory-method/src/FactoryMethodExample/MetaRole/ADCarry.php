<?php
namespace FactoryMethodExample\MetaRole;

class ADCarry implements MetaRoleInterface
{
    public function getRoleName()
    {
        return "AD Carry";
    }

    public function getPosition()
    {
        return "Botlane";
    }
}