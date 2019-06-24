<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 19/04/2017
 * Time: 01:40
 */

namespace jjsquady\MikrotikApi\Core;

use jjsquady\MikrotikApi\Support\EntityUtils;
use PEAR2\Net\RouterOS\Query as RouterQuery;
use PEAR2\Net\RouterOS\Util;

class QueryBuilder extends RouterQuery
{
    use EntityUtils;

    protected $entityClass;

    protected $client;

    protected $directory;

    public function __construct($entityClassName, $directory, Client $client)
    {
        $this->entityClass = $entityClassName;
        $this->client      = $client;
        $this->directory   = $directory;
    }

    public static function find($params)
    {

    }

    public static function where($property, $value = null, $operator = self::OP_EQ)
    {

    }

    public function all()
    {
        return $this->execute();
    }

    public function first()
    {
        return $this->all()->first();
    }

    public function get($args = array(), $query = null)
    {
        return $this->execute($args, $query);
    }

    private function execute($args = array(), $query = null)
    {
        $util = new Util($this->client);

        $util->setMenu($this->directory);

        $items = $util->getAll($args, $query);

        return $this->convertArrayToEntities($items, $this->entityClass);
    }


}