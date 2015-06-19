<?php
namespace StateExample;

use StateExample\State\Initial;

class Subject
{
    /**
     * @var StateInterface
     */
    private $state;

    /**
     * @return StateInterface
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param StateInterface $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    public function __construct()
    {
        $this->state = new Initial();
    }
}