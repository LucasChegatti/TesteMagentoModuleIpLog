<?php

namespace LucasLogger\IPLogger\Logger;

use Magento\Framework\Logger\Handler\Base;
use Monolog\Logger;

class Handler extends Base
{
    protected $fileName = '/var/log/debug.log';
    protected $loggerType = Logger::DEBUG;

}
