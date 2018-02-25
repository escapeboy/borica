<?php

namespace Borica;

use Illuminate\Support\ServiceProvider;


class BoricaServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/borica.php' => config_path('borica.php'),
        ], 'config');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Request::class, function(){
            return new Request();
        });

        $this->app->bind(Response::class, function(){
            return new Response();
        });

        $this->app->bind(Factory::class, function(){
            return new Factory();
        }, true);

        $this->mergeConfigFrom(
            __DIR__ . '/../config/borica.php', 'borica'
        );
    }
}
