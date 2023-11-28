<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RememberPasswordController;
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
Route::get('/vehicles', function () {
    return view('vehicles.index');
})->name('vehicles.index');

Route::get('/vehicles/history', function () {
    return view('vehicles.history');
})->name('vehicles.history');

Route::get('/vehicles/tax', function () {
    return view('vehicles.tax');
})->name('vehicles.tax');

// Clients Routes
Route::get('/clients', function () {
    return view('clients.index');
})->name('clients.index');

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
