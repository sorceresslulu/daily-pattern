<?php
namespace AbstractFactoryExample\UserProfile\StandardProfile;

use AbstractFactoryExample\UserProfile\UserInterface;

class User implements UserInterface
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return "{$this->name} (Standard User)";
    }
}