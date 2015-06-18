<?php
namespace VisitorExample;

abstract class Element
{
    abstract public function accept(Visitor $visitor);
}