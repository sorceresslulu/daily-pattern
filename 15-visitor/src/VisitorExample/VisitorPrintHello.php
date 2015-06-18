<?php
namespace VisitorExample;

class VisitorPrintHello extends Visitor
{
    public function visitElementA(ElementA $elementA)
    {
        \Util::println("I have visited element A");
    }

    public function visitElementB(ElementB $elementB)
    {
        \Util::println("I have visited element A");
    }
}