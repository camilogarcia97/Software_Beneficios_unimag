<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use App\Director;
use App\Admin;


class LoginController extends Controller
{
    public function login(){
        $info = $this->validate(request(),[
            'codigoLogin' => 'required',
            'contraseñaLogin' => 'required'
        ]);



        if(Director::where('idDirector',$info['codigoLogin'])->exists() ){

            return "eres director";

        }else if(Admin::where('idAdministrador',$info['codigoLogin'])->exists() ){

            return "eres Admin";

        }


    return "error"." ".$info['codigoLogin'];
    }
}
