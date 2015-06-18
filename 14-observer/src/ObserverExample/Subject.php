<?php
namespace ObserverExample;

class Subject
{
    /**
     * @var AbstractObserver[]
     */
    private $observers;

    /**
     * @var string
     */
    private $message;

    public function attachObserver(AbstractObserver $observer) {

        $observer->setSubject($this);
        $this->observers[] = $observer;
    }

    public function notify() {
        foreach($this->observers as $observer) {
            $observer->notify();
        }
    }

    public function setMessage($message) {
        $this->message = $message;
        $this->notify();
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
}