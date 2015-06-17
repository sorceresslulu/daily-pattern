<?php
namespace ChainOfResponsibilityExample\Logger;

use ChainOfResponsibilityExample\Logger;

class VerboseLogger extends Logger
{
    protected function getLoggableLevels()
    {
        return array(
            self::LEVEL_INFO,
            self::LEVEL_ERROR,
            self::LEVEL_FATAL
        );
    }

    protected function getPrefix()
    {
        return "VERBOSE LOGGER";
    }
}