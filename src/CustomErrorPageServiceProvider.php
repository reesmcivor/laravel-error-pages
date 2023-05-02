<?php

namespace YourNamespace\CustomErrorPage;

use Illuminate\Support\ServiceProvider;

class CustomErrorPageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'custom_error_page');

        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/custom_error_page'),
        ]);
    }
}