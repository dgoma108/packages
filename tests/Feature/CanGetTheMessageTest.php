<?php

namespace Vendor1\FirstPackage\Tests\Feature;

use Vendor1\FirstPackage\Tests\TestCase;

class CanGetTheMessageTest extends TestCase
{
    function test_can_get_the_message()
    {
        $this->withoutExceptionHandling();
        
        $this->get('hello-route')->assertSee('Hola Crack desde mi primer paquete');
    }

    function test_can_get_the_message_through_a_view()
    {
        //$this->withoutExceptionHandling();
        
        $this->get('hello-route')->assertViewIs('first-package::home');
    }
}
