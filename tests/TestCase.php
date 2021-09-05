<?php

namespace Vendor1\FirstPackage\Tests;


class TestCase extends \Orchestra\Testbench\TestCase
{
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