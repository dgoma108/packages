<?php

namespace Vendor1\FirstPackage;

class Hello 
{

    protected $name;

    public function __construct($name = "Crack")
    {
        $this->name = $name;
    }

    public function hello()
    {
        return "Hola {$this->name} desde mi primer paquete". PHP_EOL;
    }
}