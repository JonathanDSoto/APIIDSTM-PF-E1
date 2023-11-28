<?php

namespace App\Http\Controllers;

use App\Models\RememberPassword;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RememberPasswordController extends Controller
{
    public function store(REQUEST $request){ // Registra un cambio de contraseña en la base de datos y redirige a la vista de login
        $rememberPassword = new RememberPassword();
        $rememberPassword->id_user = $request->id_user;
        $rememberPassword->email = $request->email;
        $rememberPassword->new_password = $request->new_password;
        $rememberPassword->save();

        $user = User::find($request->id_user);
        $user->password = $request->new_password;
        $user->save();
        
        return redirect()->route('login');
    }
}
