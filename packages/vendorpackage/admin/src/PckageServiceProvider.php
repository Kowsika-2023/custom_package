<?php

namespace vendorpackage\admin;

use Illuminate\Support\ServiceProvider;

class PckageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('vendorpackage\admin\PackageController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ .'/routes.php';
        $this->publishes([
            __DIR__.'PackageController'=> config_path('PackageController.php'),

        ]);
    }
}
