<?php
namespace ObserverExample;

class ArchiveObserver extends AbstractObserver
{

    public function notify()
    {
        \Util::println(sprintf("Message will be archived: %s", $this->getSubject()->getMessage()));
    }
}