<?php
namespace ObserverExample;

abstract class AbstractObserver
{
    /**
     * @var Subject
     */
    private $subject;

    /**
     * @return Subject
     */
    protected function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param Subject $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }


    abstract public function notify();
}