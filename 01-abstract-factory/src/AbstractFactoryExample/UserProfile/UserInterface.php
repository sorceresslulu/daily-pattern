<?php
namespace AbstractFactoryExample\UserProfile;

interface UserInterface
{
    public function __construct($name);
    public function getDescription();
}