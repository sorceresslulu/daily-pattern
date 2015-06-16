<?php
namespace AbstractFactoryExample\UserProfile\StandardProfile;

use AbstractFactoryExample\UserProfile\RoleInterface;

class Role implements RoleInterface
{
    public function getTitle()
    {
        return "Standard Role";
    }

    public function hasAccessToVipFunction()
    {
        return false;
    }
}