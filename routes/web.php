<?php

use Illuminate\Support\Facades\Route;
use Vendor1\FirstPackage\Http\Controllers\HelloController;

Route::get(config('first-package.route'), [HelloController::class, 'index']);
