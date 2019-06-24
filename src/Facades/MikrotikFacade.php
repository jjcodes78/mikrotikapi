<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 17/04/2017
 * Time: 21:12
 */

namespace jjsquady\MikrotikApi\Facades;


use Illuminate\Support\Facades\Facade;

class MikrotikFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mikontrollib';
    }
}