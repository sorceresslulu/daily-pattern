<?php
namespace ChainOfResponsibilityExample\Logger;

use ChainOfResponsibilityExample\Logger;

class InfoLogger extends Logger
{
    protected function getLoggableLevels()
    {
        return array(
            self::LEVEL_INFO
        );
    }

    protected function getPrefix()
    {
        return "INFO LOGGER";
    }
}