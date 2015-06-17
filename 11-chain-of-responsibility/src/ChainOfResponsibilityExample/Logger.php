<?php
namespace ChainOfResponsibilityExample;

abstract class Logger
{
    const LEVEL_INFO = 1;
    const LEVEL_ERROR = 2;
    const LEVEL_FATAL = 3;

    /**
     * @var Logger
     */
    private $nextLogger;

    abstract protected function getLoggableLevels();
    abstract protected function getPrefix();

    private function isLoggable($level) {
        return in_array($level, $this->getLoggableLevels());
    }

    public function setNexLogger(Logger $nextLogger) {
        $this->nextLogger = $nextLogger;
    }

    public function log($message, $level) {
        if($this->isLoggable($level)) {
            \Util::println(sprintf('[%s] %s', $this->getPrefix(), $message));
        }

        if($this->nextLogger !== null) {
            $this->nextLogger->log($message, $level);
        }
    }
}