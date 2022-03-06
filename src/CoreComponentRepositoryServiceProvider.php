<?php

namespace Coder71ecom71\Ecom71Repo;

use Illuminate\Support\ServiceProvider;

class Ecom71RepoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'ecom71-repo');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'ecom71-repo');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('ecom71-repo.php'),
            ], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'ecom71-repo');

        $this->app->singleton('ecom71-repo', function () {
            return new Ecom71Repo;
        });
    }
}
