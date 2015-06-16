<?php
namespace AdapterExample;

class VendorToFighterInterfaceAdapter implements FighterInterface
{
    /**
     * @var Vendor
     */
    private $vendor;

    public function __construct(Vendor $vendor)
    {
        $this->vendor = $vendor;
    }

    public function attack()
    {
        $this->vendor->sorry();
    }

    public function moveTo($x, $y)
    {
        $this->vendor->sorry();
    }
}