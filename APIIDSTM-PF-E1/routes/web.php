<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;

Route::get('/', [Controlador::class, 'index']);
Route::get('/vehicles', [Controlador::class, 'mostrarVehiculos']);
Route::get('/clients', [Controlador::class, 'mostrarClientes']);
Route::get('/login', [Controlador::class, 'mostrarLogin']);
Route::get('/carform', [Controlador::class, 'carForm']);
Route::get('/caredit', [Controlador::class, 'carEdit']);