<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 18/04/2017
 * Time: 03:40
 */

namespace jjsquady\MikrotikApi\Exceptions;


use Exception;

class ConnectionException extends Exception
{
    public function __construct($host)
    {
        $message = "Cannot connect to Router on {$host}. Verify credentials and if host its working.";
        parent::__construct($message);
    }
}