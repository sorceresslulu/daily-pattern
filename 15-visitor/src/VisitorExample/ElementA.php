<?php
namespace VisitorExample;

class ElementA extends Element
{
    public function accept(Visitor $visitor)
    {
        $visitor->visitElementA($this);
    }
}