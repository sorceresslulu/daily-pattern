<?php
namespace CompositeExample;

class ManyPings implements PingInterface
{
    /**
     * @var PingInterface[]
     */
    private $pings = array();

    public function ping() {
        foreach($this->pings as $ping) {
            $ping->ping();
        }
    }

    public function addPing(PingInterface $ping) {
        $this->pings[] = $ping;
    }
}