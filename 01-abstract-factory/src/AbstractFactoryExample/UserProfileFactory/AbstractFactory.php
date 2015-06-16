<?php
namespace AbstractFactoryExample\UserProfileFactory;

use AbstractFactoryExample\UserProfile\RoleInterface;
use AbstractFactoryExample\UserProfile\UserInterface;

abstract class AbstractFactory
{
    private $userName;

    public function __construct($userName) {
        $this->userName = $userName;
    }

    protected function getUserName() {
        return $this->userName;
    }

    /**
     * @return UserInterface
     */
    abstract public function getUser();

    /**
     * @return RoleInterface
     */
    abstract public function getRole();
}