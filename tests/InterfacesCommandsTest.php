<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 19/04/2017
 * Time: 01:17
 */

namespace jjsquady\MikrotikApi\Tests;

use jjsquady\MikrotikApi\Commands\Interfaces;
use jjsquady\MikrotikApi\Entity\InterfaceEntity;
use jjsquady\MikrotikApi\Facades\MikrotikFacade as Mikrotik;
use jjsquady\MikrotikApi\Tests\Traits\CreateApplication;
use Orchestra\Testbench\TestCase;

class InterfacesCommandsTest extends TestCase
{
    use CreateApplication;

    protected $client;

    protected function setUp(): void
    {
        parent::setUp();

        $this->client = Mikrotik::connect()->getClient();
    }

    public function test_execute_command_sync_response_array()
    {
        $response = Interfaces::bind($this->client)
            ->get()
            ->toArray();
        $this->assertEquals(true, is_array($response));
    }

    public function test_returns_an_interface_entity_object()
    {
        $response = Interfaces::bind($this->client)->get()->first();
        $this->assertInstanceOf(InterfaceEntity::class, $response);
    }
}
