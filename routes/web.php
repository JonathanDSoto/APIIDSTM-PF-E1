<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RememberPasswordController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TrademarkController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RentalController;

// Auth Routes
Route::controller(UserController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::post('login', 'login')->name('login');;
    Route::get('users/create', 'register')->name('register');
    Route::post('users', 'store')->name('users.store');
    Route::post('rememberPassword', 'store')->name('rememberPassword');
    Route::get('login', 'logout')->name('logout');
});

// Vehicles Routes
Route::controller(CarController::class)->group(function(){
    Route::get('vehicles', 'index')->name('vehicles.index');
    Route::post('vehicles', 'store')->name('vehicles.store');
    Route::put('vehicles/{car}', 'update')->name('vehicles.update');
    Route::get('vehicles/history', 'history')->name('vehicles.history');
    Route::get('vehicules/tax', 'tax')->name('vehicles.tax');
    Route::delete('vehicles/{car}', 'destroy')->name('vehicles.destroy');
});

// Clients Routes
Route::controller(ClientController::class)->group(function(){
    Route::get('/clients', 'index')->name('clients.index');
    Route::post('/clients', 'create')->name('clients.create');
    Route::get('/clients/{client}', 'show')->name('clients.show');
    Route::put('/clients/edit/{client}', 'update')->name('clients.update');
    Route::get('/clients/history', 'history')->name('clients.history');
    Route::delete('/clients/{client}', 'drop')->name('clients.destroy');
});

// Rental routes
Route::controller(RentalController::class)->group(function(){
    Route::get('/rentals', 'index')->name('rentals.index');
    Route::post('/rentals', 'create')->name('rentals.create');
    Route::get('/rentals/{rental}', 'show')->name('rentals.show');
    Route::put('/rentals/{rental}/edit', 'update');
    Route::get('/rentals/{rental}/history', 'history')->name('rentals.history');
    Route::delete('/rentals/{rental}', 'drop')->name('rentals.destroy');
});

// Categories and Trademarks routes
Route::controller(CategoryController::class)->group(function(){
    Route::get('/categories_trademarks', 'index')->name('categories.index');
    Route::post('/categories_trademarks/store', 'store')->name('categories.store');
    Route::get('/categories_trademarks/{category}', 'show')->name('categories.show');
    Route::put('/categories_trademarks/{category}/edit', 'update')->name('categories.update');
    Route::delete('/categories_trademarks', 'drop')->name('categories.drop');
    Route::delete('/categories_trademarks/{category}', 'destroy')->name('categories.destroy');
    Route::post('/categories_trademarks', 'create')->name('categories.create');
    Route::put('/categories_trademarks/{trademark}/edit', 'update_trademark')->name('categories.update_trademark');
    Route::delete('/categories_trademarks/{trademark}', 'destroy_trademark')->name('categories.destroy_trademark');
});
