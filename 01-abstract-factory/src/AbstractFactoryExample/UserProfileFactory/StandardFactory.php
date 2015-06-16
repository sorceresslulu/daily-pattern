<?php
namespace AbstractFactoryExample\UserProfileFactory;

use AbstractFactoryExample\UserProfile\RoleInterface;
use AbstractFactoryExample\UserProfile\StandardProfile\Role;
use AbstractFactoryExample\UserProfile\StandardProfile\User;
use AbstractFactoryExample\UserProfile\UserInterface;

class StandardFactory extends AbstractFactory
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