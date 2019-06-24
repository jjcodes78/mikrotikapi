<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 20/04/2017
 * Time: 19:39
 */

namespace jjsquady\MikrotikApi\Exceptions;


use Exception;

class CommandException extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}