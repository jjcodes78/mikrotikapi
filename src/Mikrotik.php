<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 17/04/2017
 * Time: 21:15
 */

namespace jjsquady\MikrotikApi;

use jjsquady\MikrotikApi\Contracts\MikrotikContract;
use jjsquady\MikrotikApi\Core\Client;
use jjsquady\MikrotikApi\Exceptions\ConnectionException;

/**
 * Class Mikrotik
 * @package jjsquady\MikrotikApi
 */
class Mikrotik implements MikrotikContract
{
    /**
     * @var array
     */
    protected $credentials = [];

    /**
     * @var Client
     */
    protected $connection;

    /**
     * Mikrotik constructor.
     * @param $host
     * @param string $username
     * @param string $password
     * @param int $port
     */
    public function __construct($host, $username = 'admin', $password = '', $port = 8728)
    {
        $this->credentials = [
            'host' => $host,
            'username' => $username,
            'password' => $password,
            'port' => $port
        ];
    }

    /**
     * Connects to a MK host
     *
     * @return Mikrotik
     * @throws ConnectionException
     */
    public function connect()
    {
        $this->connection = new Client(...array_values($this->credentials));

        return $this;
    }

    /**
     * @return Client
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * Get the credentials
     * @return array
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

}