<?php
namespace AbstractFactoryExample\UserProfile\PremiumProfile;

use AbstractFactoryExample\UserProfile\RoleInterface;

class Role implements RoleInterface
{
    public function getTitle()
    {
        return "Premium Role";
    }

    public function hasAccessToVipFunction()
    {
        return true;
    }
}