<?php
namespace AbstractFactoryExample\UserProfile;

interface RoleInterface
{
    public function getTitle();
    public function hasAccessToVipFunction();
}