<?php
namespace AbstractFactoryExample\UserProfileFactory;

use AbstractFactoryExample\UserProfile\PremiumProfile\Role;
use AbstractFactoryExample\UserProfile\PremiumProfile\User;
use AbstractFactoryExample\UserProfile\RoleInterface;
use AbstractFactoryExample\UserProfile\UserInterface;

class PremiumFactory extends AbstractFactory
{
    /**
     * @return UserInterface
     */
    public function getUser()
    {
        return new User($this->getUserName());
    }

    /**
     * @return RoleInterface
     */
    public function getRole()
    {
        return new Role();
    }
}