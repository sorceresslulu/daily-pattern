<?php
namespace MediatorExample;

use MediatorExample\Elements\Button;
use MediatorExample\Elements\TextInput;

class WidgetExample1 implements Widget
{
    /**
     * @var Button
     */
    private $button;

    /**
     * @var TextInput
     */
    private $textInput;

    function __construct(Button $button, TextInput $textInput)
    {
        $this->button = $button;
        $this->textInput = $textInput;

        $button->setWidget($this);
        $textInput->setWidget($this);
    }

    public function buttonClick()
    {
        \Util::println("Button clicked!");
    }

    public function textInputChanged($newValue)
    {
        \Util::println("Text input changed to `$newValue``");
    }

    public function textInputEnter()
    {
        \Util::println("User entered something to text input");

        $this->button->click();
    }

}