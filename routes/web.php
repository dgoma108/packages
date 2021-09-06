<?php

use Illuminate\Support\Facades\Route;
use Vendor1\FirstPackage\Http\Controllers\HelloController;

Route::get('hello-route', [HelloController::class, 'index']);
