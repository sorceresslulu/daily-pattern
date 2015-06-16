<?php
namespace FactoryMethodExample\MetaRole;

class Midlane implements MetaRoleInterface
{
    public function getRoleName()
    {
        return "Midlane";
    }

    public function getPosition()
    {
        return "Midlane";
    }
}