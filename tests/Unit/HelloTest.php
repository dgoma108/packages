<?php

namespace Vendor1\FirstPackage\Tests\Unit;

use Vendor1\FirstPackage\Tests\TestCase;
use FirstPackage;

class HelloTest extends TestCase
{
    function test_it_returns_message()
    {
        $this->assertEquals(
            "Hola Crack desde mi primer paquete" . PHP_EOL,
            FirstPackage::hello()
        );
        $this->assertEquals(
            "Hola David desde mi primer paquete" . PHP_EOL,
            FirstPackage::hello('David')
        );
    }
}