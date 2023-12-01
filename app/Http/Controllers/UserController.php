<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){ // Muestra la vista de inicio
        return view('userRegister.login');
    }

    public function login(Request $request){ // Muestra la vista de inicio
        $user = User::where('email', $request->email)->first();
        if ($user->password == $request->password) {
            return redirect()->route('index');
        } else {
            return redirect()->route('login');
        }
    }

    public function register(){ // Redirige a la vista de registro
        return redirect()->route('register');
    }

    public function store(REQUEST $request){ // Registra un usuario en la base de datos y redirige a la vista de login
        $user = new User();
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('login');
    }

    public function rememberPassword(){ // Redirige a la vista de recordar contraseña
        return redirect()->route('rememberPassword');
    }
}
