<?php
/**
 * Created by PhpStorm.
 * User: jjsquady
 * Date: 2019-06-24
 * Time: 03:06
 */

namespace jjsquady\MikrotikApi\Contracts;

interface MikrotikContract
{
    public function connect();

    public function getConnection();

    public function getCredentials();
}