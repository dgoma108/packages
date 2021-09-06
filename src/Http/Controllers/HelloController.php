<?php

namespace Vendor1\FirstPackage\Http\Controllers;

use Vendor1\FirstPackage\Facades\FirstPackage;

class HelloController
{
    public function index()
    {
        return FirstPackage::hello();
    }
}