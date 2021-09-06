<?php

use Illuminate\Support\Facades\Route;
use Vendor1\FirstPackage\Facades\FirstPackage;

Route::get('hello-route', function () {
    return FirstPackage::hello();
});
