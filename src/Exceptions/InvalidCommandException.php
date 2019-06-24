<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 18/04/2017
 * Time: 00:37
 */

namespace jjsquady\MikrotikApi\Exceptions;

use Exception;

class InvalidCommandException extends Exception
{
    public function __construct($command)
    {
        $message = "Invalid command ({$command}). No such command or directory.";
        parent::__construct($message);
    }
}