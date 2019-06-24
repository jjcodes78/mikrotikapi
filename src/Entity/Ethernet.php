<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 18/04/2017
 * Time: 01:18
 */

namespace jjsquady\MikrotikApi\Entity;


/**
 * Class Ethernet
 * @package MiKontrol\Http\MikrotikApi\Commands\Entity
 */
class Ethernet extends Entity
{
    /**
     * @var array
     */
    protected $fillable = [
        '.id',
        'name',
        'mtu',
        'mac-address',
        'arp',
        'disable-running-check',
        'auto-negotiation',
        'full-duplex',
        'cable-settings',
        'speed',
        'running',
        'slave',
        'disabled',
        'comment'
    ];
}