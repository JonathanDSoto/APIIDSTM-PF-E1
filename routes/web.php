<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RememberPasswordController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TrademarkController;
use App\Http\Controllers\CategoryController;

// Auth Routes

Route::get('/', [UserController::class, 'index'])->name('login');

Route::get('/register', [UserController::class, 'register'])->name('register');

Route::post('/register', [UserController::class, 'store'])->name('register');

Route::post('/rememberPassword', [RememberPasswordController::class, 'store'])->name('rememberPassword');

// Vehicles Routes
Route::get('/vehicles', [CarController::class, 'index'])->name('vehicles.index');

Route::post('/vehicles', [CarController::class, 'create']);

Route::get('/vehicles/{car}', [CarController::class, 'show'])->name('vehicles.show');

Route::put('/vehicles/{car}/edit', [CarController::class, 'update']);

Route::get('/vehicles/history/{car}', [CarController::class, 'history'])->name('vehicles.history');

Route::get('/vehicules/{car}/tax', [CarController::class, 'tax'])->name('vehicles.tax');

Route::delete('/vehicles', [CarController::class, 'drop'])->name('vehicles.drop');

Route::delete('/vehicles/{car}', [CarController::class, 'drop'])->name('vehicles.drop');

// Clients Routes
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');

Route::post('/clients', [ClientController::class, 'create']);

Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show');

Route::put('/clients/{client}/edit', [ClientController::class, 'update']);

Route::get('/clients/{client}/history', [ClientController::class, 'history'])->name('clients.history');

Route::delete('/clients', [ClientController::class, 'drop'])->name('clients.drop');

Route::delete('/clients/{client}', [ClientController::class, 'drop'])->name('clients.drop');

// Rental routes

Route::get('/rentals', [RentalController::class, 'index'])->name('rentals.index');

Route::post('/rentals', [RentalController::class, 'create']);

Route::get('/rentals/{rental}', [RentalController::class, 'show'])->name('rentals.show');

Route::put('/rentals/{rental}/edit', [RentalController::class, 'update']);

Route::get('/rentals/{rental}/history', [RentalController::class, 'history'])->name('rentals.history');

Route::delete('/rentals', [RentalController::class, 'drop'])->name('rentals.drop');

Route::delete('/rentals/{rental}', [RentalController::class, 'drop'])->name('rentals.drop');

// Categories routes

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::post('/categories', [CategoryController::class, 'create']);

Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

Route::put('/categories/{category}/edit', [CategoryController::class, 'update']);

Route::delete('/categories', [CategoryController::class, 'drop'])->name('categories.drop');

Route::delete('/categories/{category}', [CategoryController::class, 'drop'])->name('categories.drop');

// Brand routes

Route::get('/brands', [TrademarkController::class, 'index'])->name('brands.index');

Route::post('/brands', [TrademarkController::class, 'create']);

Route::get('/brands/{trademark}', [TrademarkController::class, 'show'])->name('brands.show');

Route::put('/brands/{trademark}/edit', [TrademarkController::class, 'update']);

Route::delete('/brands', [TrademarkController::class, 'drop'])->name('brands.drop');

Route::delete('/brands/{trademark}', [TrademarkController::class, 'drop'])->name('brands.drop');

Route::get('/brands/view', [TrademarkController::class, 'view'])->name('brands.view');
