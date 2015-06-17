<?php
namespace ChainOfResponsibilityExample\Logger;

use ChainOfResponsibilityExample\Logger;

class ErrorLogger extends Logger
{
    protected function getLoggableLevels()
    {
        return array(
            self::LEVEL_ERROR,
            self::LEVEL_FATAL
        );
    }

    protected function getPrefix()
    {
        return "ERROR LOGGER";
    }
}