<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdopcionController extends Controller
{
    public function index(Request $request)
    {

        $sesionIniciada = $request->session()->has('username');
        $usuarioAdmin = $request->session()->has('admin');
        $username = $request->session()->get('username','default');
        
        $parametros =[
            'sesion' => $sesionIniciada,
            'username' => $username,
            'admin' => $usuarioAdmin
        ];
        
        if($sesionIniciada){
            return view('formularioRegistroMascota', $parametros);
        }else{
            return redirect('/login');
        }

        
    }
}
