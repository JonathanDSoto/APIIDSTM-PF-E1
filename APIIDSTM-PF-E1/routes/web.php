<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;

Route::get('/', function () {
    return view('index');
});
Route::get('/clients', [Controlador::class, 'index']);