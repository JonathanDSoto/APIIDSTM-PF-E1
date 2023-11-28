<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    public function index()
    {
        return view('layouts.vehicles');
    }

    public function mostrarVehiculos()
    {
        return view('layouts.vehicles');
    }

    public function carForm()
    {
        return view('layouts.carForm');
    }

    public function carEdit()
    {
        return view('layouts.carEdit');
    }


    public function mostrarClientes()
    {
        return view('layouts.clientes');
    }

    public function newClient()
    {
        return view('layouts.newClient');
    }


    public function userFake()
    {
        return view('fakeUser.violet');
    }
    public function userList()
    {
        return view('layouts.userList');
    }
    public function mostrarLogin()
    {
        return view('layouts.userRegister.login');
    }

    public function registro()
    {
        return view('layouts.userRegister.register');
    }

    public function forgotpassword()
    {
        return view('layouts.userRegister.forgotPassword');
    }

    public function resetpassword()
    {
        return view('layouts.userRegister.resetPassword');
    }

    public function logout()
    {
        return view('layouts.login');
    }


}
