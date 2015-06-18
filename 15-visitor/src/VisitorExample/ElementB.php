<?php
namespace VisitorExample;

class ElementB extends Element
{
    public function accept(Visitor $visitor)
    {
        $visitor->visitElementB($this);
    }

}