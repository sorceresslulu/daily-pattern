<?php
namespace MediatorExample\Elements;

use MediatorExample\Widget;

class TextInput
{
    /**
     * @var Widget
     */
    private $widget;

    private $value;

    /**
     * @param Widget $widget
     */
    public function setWidget($widget)
    {
        $this->widget = $widget;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
        $this->widget->textInputChanged($value);
    }

    public function enter()
    {
        $this->widget->textInputEnter();
    }
}