<?php
namespace MediatorExample\Elements;

use MediatorExample\Widget;

class Button
{
    /**
     * @var Widget
     */
    private $widget;

    /**
     * @param Widget $widget
     */
    public function setWidget($widget)
    {
        $this->widget = $widget;
    }

    public function click()
    {
        $this->widget->buttonClick();
    }
}