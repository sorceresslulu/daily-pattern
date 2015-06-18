<?php
namespace VisitorExample;

abstract class Visitor
{
    abstract public function visitElementA(ElementA $elementA);
    abstract public function visitElementB(ElementB $elementB);
}