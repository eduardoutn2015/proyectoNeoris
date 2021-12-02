<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdopcionController;

Route::resource('/',HomeController::class)->only('index');

Route::resource('/mascotas/nueva', AdopcionController::class);


