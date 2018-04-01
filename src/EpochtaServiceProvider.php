<?php

namespace Pantagruel964\Epochta;

use Illuminate\Support\ServiceProvider;

class EpochtaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/epochta.php' => config_path('epochta.php')
        ]);
    }

    /**
     * Register the service provider
     */
    public function register()
    {
        $config_path = __DIR__.'/../config/epochta.php';

        $this->mergeConfigFrom($config_path, 'epochta');

        $this->app->singleton('epochta', function () {
            return new Epochta();
        });
    }
}
