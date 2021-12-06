<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        $sesionIniciada = $request->session()->has('username');
        $username = $request->session()->get('username','default');
        $parametros =[
            'sesion' => $sesionIniciada,
            'username' => $username
        ];
        if($sesionIniciada){
            return view('home',$parametros);
        }else{
            return redirect('/login');
        }

        
    }
}
