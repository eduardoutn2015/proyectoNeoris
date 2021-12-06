<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdopcionController;
use App\Http\Controllers\SessionController;

Route::resource('/',HomeController::class)->only('index');

//lo de mostrar las mascotas falta retocar
Route::resource('/mascotas',HomeController::class)->only('index');

Route::resource('/mascotas/nueva', AdopcionController::class);


Route::get('/login', [SessionController::class, 'formularioLogIn']);
Route::post('/login', [SessionController::class, 'logInUsuario']);
Route::get('/register', [SessionController::class, 'formularioRegistrarse']);
Route::post('/register', [SessionController::class, 'registroUsuario']);
Route::get('/logout', [SessionController::class, 'logOut']);