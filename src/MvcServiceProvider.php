<?php

namespace Hw798;

use Illuminate\Support\ServiceProvider;

class MvcServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerControllerCommand();
    }

    private function registerControllerCommand()
    {
        $this->app->singleton('command.remoblaser.controller', function ($app) {
            return $app['Hw798\Console\ControllerMakeCommand'];
        });
        $this->commands('command.remoblaser.controller');
    }
}