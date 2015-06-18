<?php
namespace ObserverExample;

class MailObserver extends AbstractObserver
{
    public function notify()
    {
        \Util::println(sprintf("Message will be processing in mail application: %s", $this->getSubject()->getMessage()));
    }
}