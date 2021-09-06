<?php

namespace Vendor1\FirstPackage;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Vendor1\FirstPackage\Facades\FirstPackage;

class FirstPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'first-package');
    }

    public function register()
    {
        $this->app->bind('first-package', function() {
            return new Hello;
        });
    }
}