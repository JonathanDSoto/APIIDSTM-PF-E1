<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\models\BillRental;
use App\Models\Category;
use App\Models\Rate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(Category $category = null){ // Muestra todos los vehículos en una vista
        if($category != null){
            $cars = Car::where('categories_id', $category->id)->get();
            return view('vehicules.index', compact('cars'));
        }
        $cars = Car::all();
        return view('vehicles.index', compact('cars'));
    }

    public function create(Request $request){ // Redirige a la vista de crear un vehículo
        $car = new Car();
        $car->model = $request->model;
        $car->trademarks_id = $request->trademarks_id;
        $car->categories_id = $request->categories_id;
        $car->is_avaliable = $request->is_avaliable;
        $car->rates_id = $request->rates_id;
        $car->image = $request->image;
        $car->save();
        return view('vehicles.index');
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
        
        return redirect()->route('vehicles.index', compact('car'));
    }

    public function drop(Car $car){ // Elimina un vehículo en específico
        $car->delete();
        return redirect()->route('vehicles.index');
    }

    public function history(Car $car){ // Muestra el historial de un vehículo en específico
        $billRentals = BillRental::where('cars_id', $car->id)->get();
        return view('vehicles.history', compact('billRentals', 'car'));
    }

    public function tax(Car $car){ // Muestra la vista de impuestos
        $category = Category::where('id', $car->categories_id)->get();
        $rate = Rate::where('categoria', $category->categoria)->get();
        return view('vehicles.tax', compact('rate', 'car'));
    }
}
