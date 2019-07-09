<?php

namespace Rinjax\RinjaxWebsite\Providers;

use Illuminate\Support\ServiceProvider;

class RinjaxWebsiteServiceProvider extends ServiceProvider
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

        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'website');

        $this->mergeConfigFrom(__DIR__.'/../Config/website.php', 'website');

        $this->publishes([
            __DIR__.'/../Public' => public_path('website'),
        ], 'website');
    }
}