<?php

namespace Vendor1\FirstPackage\Tests\Unit;

use Vendor1\FirstPackage\Tests\TestCase;
use FirstPackage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Vendor1\FirstPackage\Models\Message;

class HelloTest extends TestCase
{
    use RefreshDatabase;

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

    function test_can_interact_with_models_and_database()
    {
        $msg = new Message();
        $msg->content = 'Mensaje de prueba';
        $msg->save();

        $this->assertEquals('Mensaje de prueba', Message::first()->content);
    }
}