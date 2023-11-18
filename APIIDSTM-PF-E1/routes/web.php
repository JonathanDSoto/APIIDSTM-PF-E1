<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;

Route::get('/', [Controlador::class, 'index']);
Route::get('/clients', [Controlador::class, 'mostrarClientes']);
Route::get('/login', [Controlador::class, 'mostrarLogin']);