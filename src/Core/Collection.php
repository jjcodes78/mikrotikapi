<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 19/04/2017
 * Time: 02:14
 */

namespace jjsquady\MikrotikApi\Core;

use Illuminate\Support\Collection as IlluminateCollection;

class Collection extends IlluminateCollection
{
    public function add($value)
    {
        parent::push($value);
        return $this;
    }
}