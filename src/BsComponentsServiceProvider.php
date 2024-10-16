<?php

namespace Aldo\BootstrapComponents;

use Illuminate\Support\ServiceProvider;

class BsComponentsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'bootstrapComponents');
    }
}
