<?php
/**
 * Created by PhpStorm.
 * User: jjsquady
 * Date: 2019-06-24
 * Time: 01:20
 */

namespace jjsquady\MikrotikApi\Tests\Traits;

trait CreateApplication
{
    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $env = \Dotenv\Dotenv::create(__DIR__ . '/../../')->load();
        $app['config']->set('mikrotik.auth.host', $env['MK_API_HOST']);
        $app['config']->set('mikrotik.auth.user', $env['MK_API_USER']);
        $app['config']->set('mikrotik.auth.password', $env['MK_API_PASSWORD']);
        $app['config']->set('mikrotik.auth.port', $env['MK_API_PORT']);
    }

    protected function getPackageProviders($app)
    {
        return [\jjsquady\MikrotikApi\MikrotikServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Mikrotik' => \jjsquady\MikrotikApi\Facades\MikrotikFacade::class
        ];
    }
}