<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    public function index()
    {
        return view('layouts.clientes');
    }
}
