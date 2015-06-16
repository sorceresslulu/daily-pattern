<?php
namespace CompositeExample;

class SinglePing implements PingInterface
{
    public function ping()
    {
        \Util::println("PING!");
    }
}