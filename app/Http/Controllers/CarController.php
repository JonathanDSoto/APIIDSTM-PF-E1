<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){ // Muestra todos los vehículos en una vista
        $cars = Car::all();
        return view('vehicles.index', compact('cars'));
    }

    public function show(Car $car){ // Muestra un vehículo en específico en una vista
        return redirect()->route('vehicles.show', compact('car'));
    }

    public function edit(Car $car){ // Redirige a la vista de editar un vehículo
        return redirect()->route('vehicles.edit', compact('car'));
    }

    public function update(Request $request, Car $car){ // Actualiza un vehículo en específico y regresa a la vista con el vehiculo actualizado
        $car->model = $request->model;
        $car->trademarks_id = $request->trademarks_id;
        $car->categories_id = $request->categories_id;
        $car->is_avaliable = $request->is_avaliable;
        $car->rates_id = $request->rates_id;
        $car->image = $request->image;
        $car->save();
        
        return redirect()->route('vehicles.show', compact('car'));
    }
}
