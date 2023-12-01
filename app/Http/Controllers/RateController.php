<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RateController extends Controller
{
    public function index(){ // Muestra todas las tarifas en una vista
        $rates = Rate::all();
        return view('rates.index', compact('rates'));
    }

    public function show(Rate $rate){ // Muestra una tarifa en específico en una vista
        return redirect()->route('rates.show', compact('rate'));
    }

    public function edit(Rate $rate){ // Redirige a la vista de editar una tarifa
        return redirect()->route('rates.edit', compact('rate'));
    }

    public function update(Request $request, Rate $rate){ // Actualiza una tarifa en específico y regresa a la vista con la tarifa actualizada
        $rate->tarifa = $request->tarifa;
        $rate->save();
        
        return redirect()->route('rates.index');
    }

    public function drop(Rate $rate){ // Elimina una tarifa en específico
        $rate->delete();
        return redirect()->route('rates.index');
    }
}
