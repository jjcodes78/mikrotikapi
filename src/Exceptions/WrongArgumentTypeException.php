<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 18/04/2017
 * Time: 03:34
 */

namespace jjsquady\MikrotikApi\Exceptions;


use Exception;

class WrongArgumentTypeException extends Exception
{
    public function __construct($needed, $passed)
    {
        $message = "Expected {$needed}, but an {$passed} has found.";
        parent::__construct($message);
    }
}