<?php
namespace MediatorExample;

interface Widget
{
    public function buttonClick();
    public function textInputChanged($newValue);
    public function textInputEnter();
}