<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    public function index()
    {
        return view('layouts.vehicles');
    }
    public function mostrarLogin()
    {
        return view('layouts.login');
    }
    public function logout()
    {
        return view('layouts.login');
    }
    public function mostrarClientes()
    {
        return view('layouts.clientes');
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
}
