<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 17/04/2017
 * Time: 21:26
 */

namespace jjsquady\MikrotikApi\Contracts;


use jjsquady\MikrotikApi\Core\Client;

interface CommandContract
{
    public function get();

    public function remove($id);

    public function find($attribute, $value = null);

    public function getBaseCommand();

    public static function bind(Client $client);
}