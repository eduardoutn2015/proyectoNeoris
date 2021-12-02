<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdopcionController extends Controller
{
    public function index(Request $request)
    {
        return view('formularioRegistroMascota');
    }
}
