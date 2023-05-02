<?php

namespace ReesMcIvor\LaravelErrorPages;

use Illuminate\Support\ServiceProvider;

class CustomErrorPagesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/views', 'laravel_error_pages');

        $this->mergeConfigFrom(__DIR__.'/config/laravel_error_pages.php', 'laravel_error_pages');

        $this->publishes([
            __DIR__ . '/views' => resource_path('views'),
        ]);
    }
}