<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){ // Muestra la vista de inicio
        return view('userRegister.login');
    }

    public function login(Request $request){ // Muestra la vista de inicio
        $user = User::where('email', $request->email)->first();
        if ($user->password == $request->password) {
            return redirect()->route('vehicles.index');
        } else {
            return redirect()->route('index');
        }
    }

    public function register(){ // Redirige a la vista de registro
        return view('userRegister.register');
    }

    public function store(Request $request){ // Registra un usuario en la base de datos y redirige a la vista de login
        $user = new User();
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('vehicles.index');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return view('userRegister.login');
    }


    public function rememberPassword(Request $request){ // Redirige a la vista de recordar contraseña
        $user = User::where('email', $request->email);
        if ($user){
            $user->password = $request->password;
            return redirect()->route('rememberPassword');
        } 
        return redirect()->route('login');
    }
}
