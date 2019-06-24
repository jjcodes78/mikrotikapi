<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 19/04/2017
 * Time: 04:44
 */

namespace jjsquady\MikrotikApi\Entity;


class Address extends Entity
{
    /**
     * @var array
     */
    protected $fillable = [
        '.id',
        'address',
        'network',
        'interface',
        'actual-interface',
        'invalid',
        'dynamic',
        'disabled',
        'comment'
    ];
}