<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;


class LoginController extends Controller
{
    public function login(){
        $info = $this->validate(request(),[
            'codioLogin' => 'required',
            'contraseñaLogin' => 'required'
        ]);

        // if(Auth::attempt($info)){
        //     return "haz iniciado correctamente";
        // }


    return 'error en la autentificacion';
    }
}
