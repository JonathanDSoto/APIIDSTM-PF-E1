<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;

Route::get('/', [Controlador::class, 'mostrarLogin']);
Route::get('/vehicles', [Controlador::class, 'mostrarVehiculos']);
Route::get('/clients', [Controlador::class, 'mostrarClientes']);
Route::get('/login', [Controlador::class, 'mostrarLogin']);
Route::get('/forgot-password', [Controlador::class, 'forgotpassword']);
Route::get('/reset-password', [Controlador::class, 'resetpassword']);
Route::get('/register', [Controlador::class, 'registro']);
Route::get('/carform', [Controlador::class, 'carForm']);
Route::get('/caredit', [Controlador::class, 'carEdit']);
Route::get('/userlist', [Controlador::class, 'userList']);
Route::get('/user', [Controlador::class, 'userFake']);
Route::get('/newclient', [Controlador::class, 'newClient']);