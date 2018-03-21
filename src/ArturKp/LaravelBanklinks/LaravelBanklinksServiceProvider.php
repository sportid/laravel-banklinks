<?php

namespace ArturKp\LaravelBanklinks;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class LaravelBanklinksServiceProvider extends LaravelServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        $this->handleConfigs();
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    public function handleConfigs()
    {
        $configPath = __DIR__ . '/../../config/config.php';

        $this->publishes([
            $configPath => config_path('laravel-banklinks.php'),
        ]);
    }
}
