<?php

namespace TimWassenburg\DefaultModelOrder;

use Illuminate\Support\ServiceProvider;

class DefaultModelOrderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/default-model-order.php', 'default-model-order');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/default-model-order.php' => config_path('default-model-order.php'),
        ], 'config');
    }
}
