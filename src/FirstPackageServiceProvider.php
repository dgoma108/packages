<?php

namespace Vendor1\FirstPackage;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Vendor1\FirstPackage\Facades\FirstPackage;

class FirstPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom($this->basePath('routes/web.php'));

        $this->loadViewsFrom($this->basePath('resources/views'), 'first-package');

        $this->publishes([
            $this->basePath('resources/views') => resource_path('views/vendor/first-package')
        ], 'first-package-views');

        $this->publishes([
            $this->basePath('config/first-package.php') => base_path('config/first-package.php')
        ], 'first-package-config');
    }

    public function register()
    {
        $this->app->bind('first-package', function() {
            return new Hello;
        });

        $this->mergeConfigFrom(
            $this->basePath('config/first-package.php'), 
            'first-package'
        );
    }

    protected function basePath($path = "")
    {
        return __DIR__ . '/../' . $path;
    }
}