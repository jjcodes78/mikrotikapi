<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 19/04/2017
 * Time: 01:07
 */

namespace jjsquady\MikrotikApi\Core;

use jjsquady\MikrotikApi\Exceptions\ConnectionException;
use PEAR2\Net\RouterOS\Client as RouterClient;

class Client extends RouterClient
{
    /**
     * @var boolean
     */
    protected $connected;

    /**
     * Client constructor.
     * @param mixed ...$args
     * @throws ConnectionException
     */
    public function __construct(...$args)
    {
        try {
            parent::__construct(...$args);

            $this->connected = true;

        }catch (\Exception $exception) {

            $this->connected = false;

            throw new ConnectionException($exception->getMessage());
        }
    }

    /**
     * @return mixed
     */
    public function isConnected()
    {
        return $this->connected;
    }
}