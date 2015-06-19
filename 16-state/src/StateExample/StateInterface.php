<?php
namespace StateExample;

interface StateInterface
{
    public function open();
    public function send($message);
    public function close();
}