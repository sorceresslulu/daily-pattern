<?php
require_once (__DIR__).'/../util.php';
require_once (__DIR__).'/../psr4.php';

$psr4AutoLoader = new Psr4AutoloaderClass();
$psr4AutoLoader->addNamespace('AbstractFactoryExample', (__DIR__.'/src/AbstractFactoryExample'));
$psr4AutoLoader->register();

function profile($title, \AbstractFactoryExample\UserProfile\UserInterface $user, \AbstractFactoryExample\UserProfile\RoleInterface $role) {
    Util::println($title);
    Util::println("User: " . $user->getDescription(), 1);
    Util::println("Role: " . $role->getTitle(), 1);
    Util::println("Has access: " . ($role->hasAccessToVipFunction() ? 'Y' : 'N'), 1);
    echo "\n";
}


$standardFactory = new \AbstractFactoryExample\UserProfileFactory\StandardFactory("Annie");
$standardUser = $standardFactory->getUser();
$standardRole = $standardFactory->getRole();

$premiumProfile = new \AbstractFactoryExample\UserProfileFactory\PremiumFactory("Evelynn");
$premiumUser = $premiumProfile->getUser();
$premiumRole = $premiumProfile->getRole();

profile("Standard", $standardUser, $standardRole);
profile("Premium", $premiumUser, $premiumRole);