<?php

namespace jjsquady\MikrotikApi;

use Illuminate\Support\ServiceProvider;

/**
 * Class MikrotikServiceProvider
 * @package jjsquady\MikrotikApi
 */
class MikrotikServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/mikrotik.php' => config_path('mikrotik.php')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/mikrotik.php', 'mikrotik');

        $this->app->singleton('mikontrollib', function($app) {
            return new Mikrotik(
                config('mikrotik.auth.host'),
                config('mikrotik.auth.user'),
                config('mikrotik.auth.password'),
                config('mikrotik.auth.port'),
            );
        });
    }

    public function provides()
    {
        return [
            'mikontrollib'
        ];
    }
}
