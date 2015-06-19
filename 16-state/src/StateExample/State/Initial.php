<?php
namespace StateExample\State;

use StateExample\StateInterface;

class Initial implements StateInterface
{
    public function open()
    {
        \Util::println("Opening...");
    }

    public function send($message)
    {
        \Util::println("I can't send message at this moment");
    }

    public function close()
    {
        \Util::println("I can't close at this moment");
    }
}