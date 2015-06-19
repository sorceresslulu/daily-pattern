<?php
namespace StateExample\State;

use StateExample\StateInterface;

class Opened implements StateInterface
{
    public function open()
    {
        \Util::println("Already opened");
    }

    public function send($message)
    {
        \Util::println(sprintf("Sending a message: %s", $message));
    }

    public function close()
    {
        \Util::println("Closing...");
    }
}