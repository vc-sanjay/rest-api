<?php

namespace viitorcloud\gatekeeper;

use Illuminate\Support\ServiceProvider;

class GateKeeperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}
