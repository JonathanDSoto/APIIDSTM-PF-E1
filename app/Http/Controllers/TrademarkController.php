<?php

namespace App\Http\Controllers;

use App\Models\Trademark;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrademarkController extends Controller
{
    public function index(){ // Muestra todas las marcas en una vista
        $trademarks = Trademark::all();
        return view('trademarks.index', compact('trademarks'));
    }

    public function show(Trademark $trademark){ // Muestra una marca en específico en una vista
        return redirect()->route('trademarks.show', compact('trademark'));
    }

    public function edit(Trademark $trademark){ // Redirige a la vista de editar una marca
        return redirect()->route('trademarks.edit', compact('trademark'));
    }

    public function update(Request $request, Trademark $trademark){ // Actualiza una marca en específico y regresa a la vista con la marca actualizada
        $trademark->marca = $request->name;
        $trademark->image = $request->image;
        $trademark->save();
        
        return redirect()->route('trademarks.show', compact('trademark'));
    }
}
