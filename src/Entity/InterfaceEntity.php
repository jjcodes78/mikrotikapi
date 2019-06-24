<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 18/04/2017
 * Time: 00:19
 */

namespace jjsquady\MikrotikApi\Entity;


class InterfaceEntity extends Entity
{
    protected $directory = '/interface';

    protected $fillable = [
        '.id',
        'name',
        'type',
        'mtu',
        'dynamic',
        'running',
        'disabled',
        'comment'
    ];
}