<?php

namespace Vendor1\FirstPackage\Tests\Feature;

use Vendor1\FirstPackage\Tests\TestCase;

class CanGetTheMessageTest extends TestCase
{
    function test_can_get_the_message()
    {
        $this->get('hello-route')->assertSee('Hola Crack desde mi primer paquete');
    }
}
