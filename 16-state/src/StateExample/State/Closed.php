<?php
namespace StateExample\State;

use StateExample\StateInterface;

class Closed implements StateInterface
{
    public function open()
    {
        \Util::println("Closed");
    }

    public function send($message)
    {
        \Util::println("Closed");
    }

    public function close()
    {
        \Util::println("Closed");
    }
}