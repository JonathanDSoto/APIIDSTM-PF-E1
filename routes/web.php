<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RememberPasswordController;
use App\Http\Controllers\ClientController;
use App\Models\RememberPassword;

// Auth Routes
Route::get('/', function () {
    return view('userRegister.login');
})->name('login');

Route::get('/register', function () {
    return view('userRegister.register');
})->name('register');

Route::get('/rememberPassword', function () {
    return view('userRegister.resetPassword');
})->name('rememberPassword');

Route::post('/register', [UserController::class, 'store'])->name('register');

Route::post('/rememberPassword', [RememberPasswordController::class, 'store'])->name('rememberPassword');


// Vehicles Routes
Route::get('/vehicles', [CarController::class, 'index'])->name('vehicles.index');

Route::post('/vehicles', [CarController::class, 'create']);

Route::get('/vehicles/{car}', [CarController::class, 'show'])->name('vehicles.show');

Route::put('/vehicles/{car}/edit', [CarController::class, 'update']);

Route::get('/vehicles/history/{car}', [CarController::class, 'history'])->name('vehicles.history');

Route::get('/vehicules/{car}/tax', [CarController::class, 'tax'])->name('vehicles.tax');

Route::delete('/vehicles/{car}', [CarController::class, 'drop'])->name('vehicles.drop');

// Clients Routes
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');

Route::get('/clients/history', function () {
    return view('clients.history');
})->name('clients.history');

// Rental routes
Route::get('/rentals', function () {
    return view('rentals.index');
})->name('rentals.index');

// Categories routes
Route::get('/categories', function () {
    return view('categories.index');
})->name('categories.index');

Route::get('/categories/view', function () {
    return view('categories.view');
})->name('categories.view');

// Brand routes
Route::get('/brands', function () {
    return view('brands.index');
})->name('brands.index');

Route::get('/brands/view', function () {
    return view('brands.view');
})->name('brands.view');
