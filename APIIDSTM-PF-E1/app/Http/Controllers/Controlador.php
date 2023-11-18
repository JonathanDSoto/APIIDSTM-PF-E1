<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function mostrarLogin()
    {
        return view('layouts.login');
    }
    public function mostrarClientes()
    {
        return view('layouts.clientes');
    }
}
