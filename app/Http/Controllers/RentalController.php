<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\Car;
use App\Models\Rate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index(){ // Muestra todos los alquileres en una vista
        $rentals = Rental::all();
        return view('rentals.index', compact('rentals'));
    }

    public function show(Rental $rental){ // Muestra un alquiler en específico en una vista
        return redirect()->route('rentals.show', compact('rental'));
    }

    public function edit(Rental $rental){ // Redirige a la vista de editar un alquiler
        return redirect()->route('rentals.edit', compact('rental'));
    }

    public function update(Request $request, Rental $rental){ // Actualiza un alquiler en específico y regresa a la vista con el alquiler actualizado
        $rate = Rate::where('id', $request->id_tarifa);
        $car = Car::where('id', $request->id_vehiculo);
        
        if($car->is_avaliable == true){
            $rental->id_cliente = $request->id_cliente;
            $rental->id_vehiculo = $request->id_vehiculo;
            $rental->id_tarifa = $request->id_tarifa;
            $rental->fecha_inicio = $request->fecha_inicio;
            $rental->fecha_fin = $request->fecha_fin;
            $rental->total = $rate->tarifa;
            $rental->save();
    
            $car->is_avaliable = false;
            $car->save();
            
            return redirect()->route('rentals.show', compact('rental'));
        } else {
            return redirect()->route('rentals.show', compact('rental'));
        }
    }
}