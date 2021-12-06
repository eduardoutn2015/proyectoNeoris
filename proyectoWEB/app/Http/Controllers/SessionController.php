<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    public function formularioLogIn(Request $request)
    {
        $sesionIniciada = $request->session()->has('username');
        $username = $request->session()->get('username','default');
        $parametros =[
            'sesion' => $sesionIniciada,
            'username' => $username
        ];
        
        if($sesionIniciada){
            return redirect('/');
        }else{
            return view('inicioSesion', $parametros);
        }

        
    }

    public function formularioRegistrarse(Request $request){
        
        $sesionIniciada = $request->session()->has('username');
        $username = $request->session()->get('username','default');
        $parametros =[
            'sesion' => $sesionIniciada,
            'username' => $username
        ];
        
        return view('registrarUsuario', $parametros);

    }

    public function logInUsuario(Request $request){
        $usuario = $request->post("username");
        $contra = $request->post("password");

        //validar que el usuario existe, en ese caso creamos la sesion y sino lo volvemos a la pagina de login
        $usuarioCreado = DB::table("usuarios")
            ->where("username","=", $usuario)
            ->where("password","=", $contra)
            ->get();

        if(count($usuarioCreado) > 0){
            $request->session()->put('username',$usuario);
            return redirect('/');
        }else{     
            return redirect('/login');
        }

    }


    public function registroUsuario(Request $request){
        $usuario = $request->post("username");
        $email = $request->post("mail");
        $contra = $request->post("password");

        try{
            DB::table("usuarios")->insert([
                "username" => $usuario,
                "mail" => $email,
                "password" => $contra
            ]);
    
            return redirect('/login');

        }catch(Exception){

            return redirect('/register');
        }
        

    }

    public function logOut(Request $request){
        
        $request->session()->flush();
        return redirect('/login');
    }




}
