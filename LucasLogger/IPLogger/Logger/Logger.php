<?php

namespace LucasLogger\IPLogger\Logger;

class Logger extends \Monolog\Logger
{
    protected $_logger;

    public function __construct(
        \Psr\Log\LoggerInterface $logger, // injeção de dependencia
        array $data = []
    ) {
        $this->_logger = $logger;
        parent::__construct($data);
    }

    public function log() {
        $this->_logger->addDebug('teste log teste');
    }
}
