<?php

namespace Vendor1\FirstPackage\Tests;


class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connection.testing', [
            'driver' => 'sqlite',
            'database' => ':memory:'
        ]);
    }

    protected function getPackageProviders($app)
    {
        return [
            \Vendor1\FirstPackage\FirstPackageServiceProvider::class
        ];
    }
    protected function getPackageAliases($app)
    {
        return [
            'FirstPackage' => \Vendor1\FirstPackage\Facades\FirstPackage::class
        ];
    }
}