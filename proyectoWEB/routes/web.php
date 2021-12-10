<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdopcionController;
use App\Http\Controllers\SessionController;

Route::get('/',[HomeController::class, 'index']);
Route::get('/adopciones/nueva', [AdopcionController::class, 'formularioAdopcion']);
Route::get('/adopciones', [AdopcionController::class, 'mostrarAdopciones']);
Route::post('/adopciones', [AdopcionController::class, 'registrarAdopcion']);



Route::get('/login', [SessionController::class, 'formularioLogIn']);
Route::post('/login', [SessionController::class, 'logInUsuario']);
Route::get('/register', [SessionController::class, 'formularioRegistrarse']);
Route::post('/register', [SessionController::class, 'registroUsuario']);
Route::get('/logout', [SessionController::class, 'logOut']);