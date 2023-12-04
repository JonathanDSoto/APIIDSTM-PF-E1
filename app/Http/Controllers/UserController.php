<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){ 
        return view('userRegister.login');
    }

    public function login(Request $request){ 
        $user = User::where('email', $request->email)->first();
        if ($user->password == $request->password) {
            return redirect()->route('vehicles.index');
        } else {
            return redirect()->route('index');
        }
    }

    public function register(){ 
        return view('userRegister.register');
    }

    public function store(Request $request){ 
        $user = new User();
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect()->route('vehicles.index');
    }

    public function rememberPassword(){
        return redirect()->route('rememberPassword');
    }
}
