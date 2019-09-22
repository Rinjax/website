<?php

namespace Rinjax\Website\Providers;

use Illuminate\Support\ServiceProvider;

class WebsiteServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../Http/Routes/website.php');

        $this->loadRoutesFrom(__DIR__.'/../Http/Routes/demo-stat.php');

        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'website');

        $this->mergeConfigFrom(__DIR__.'/../Config/website.php', 'website');

        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');

        $this->publishes([
            __DIR__.'/../Public' => public_path('website'),
        ], 'website');
    }
}