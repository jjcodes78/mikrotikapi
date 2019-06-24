<?php

/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 19/04/2017
 * Time: 07:26
 */

namespace jjsquady\MikrotikApi\Tests;

use jjsquady\MikrotikApi\Core\Client;
use jjsquady\MikrotikApi\Facades\MikrotikFacade as Mikrotik;
use jjsquady\MikrotikApi\Tests\Traits\CreateApplication;
use Orchestra\Testbench\TestCase;

class StaticCommandTest extends TestCase
{
    use CreateApplication;
    
    /** @test **/
    public function it_a_client_mikrotik_instance()
    {
        $this->assertInstanceOf(Client::class, Mikrotik::connect()->getClient());
    }
}
