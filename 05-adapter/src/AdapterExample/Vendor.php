<?php
namespace AdapterExample;

class Vendor
{
    public function greetings()
    {
        \Util::println("Welcome to my shop, summoner!");
    }

    public function sorry()
    {
        \Util::println("Sorry but I can't do that");
    }
}