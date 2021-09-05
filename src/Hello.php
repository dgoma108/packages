<?php

namespace Vendor1\FirstPackage;

class Hello 
{

    public function hello($name = "Crack")
    {
        return "Hola {$name} desde mi primer paquete". PHP_EOL;
    }
}