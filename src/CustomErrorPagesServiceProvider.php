<?php

namespace ReesMcIvor\LaravelErrorPages;

use Illuminate\Support\ServiceProvider;

class CustomErrorPagesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/views', 'custom_error_page');

        $this->loadConfigFrom(__DIR__ . '/config/custom_error_pages.php');

        $this->publishes([
            __DIR__ . '/views' => resource_path('views'),
        ]);
    }
}