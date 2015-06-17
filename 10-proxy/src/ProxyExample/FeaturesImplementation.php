<?php
namespace ProxyExample;

class FeaturesImplementation implements Features
{
    public function createNewDocument() {
        \Util::println("Creating new document");
    }

    public function destroyEnemyInhibitor() {
        \Util::println("I can destroy enemy inhibitor!");
    }

    public function useHeal() {
        \Util::println("Restore HP/5");
    }
}