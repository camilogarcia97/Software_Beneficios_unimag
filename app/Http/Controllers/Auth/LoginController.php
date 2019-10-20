<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use App\Director;
use App\Admin;
use App\Empleado;


class LoginController extends Controller
{
    public function login(){
        $info = $this->validate(request(),[
            'codigoLogin' => 'required',
            'contraseñaLogin' => 'required'
        ]);



        if(Director::where('idDirector',$info['codigoLogin'])
                    ->where('contraseña',$info['contraseñaLogin'])
                    ->exists() ){

            return "eres director";

        }else if(Admin::where('idAdministrador',$info['codigoLogin'])
                        ->where('contraseña',$info['contraseñaLogin'])
                        ->exists() ){

            return redirect ('/admin');

        }else if (Empleado::where('idEmpleado',$info['codigoLogin'])
                        ->where('contraseña',$info['contraseñaLogin'])
                        ->exists() ){
          
           return redirect ('/cafeteria'); 
           // return "soy empleado";
        }


    return "error, algo salio mal";
    }
}
