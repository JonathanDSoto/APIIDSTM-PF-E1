<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Trademark;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){ // Muestra todas las categorias y Marcas en una vista
        $categories = Category::all();
        $trademarks = Trademark::all();
        return view('categories.index', compact('categories', 'trademarks'));
    }

    public function store(Request $request)
    {
        // Redirige a la vista de crear un vehículo
        $category = new Category();
        $category->categoria = $request->categoria;
        $category->save();
        return redirect()->route('categories.index');
    }

    public function create(Request $request){ // Redirige a la vista de crear una marca
        $trademark = new Trademark();
        $trademark->marca = $request->name;
        $trademark->image = $request->image;
        $trademark->save();
        return redirect()->route('categories.index');
    }

    public function update(Request $request,  $id){ // Actualiza una categoria en específico y regresa a la vista con la categoria actualizada
        Category::where('id', $id)->update([
            'categoria' => $request->categoria,
        ]);

        return redirect()->route('categories.index');
    }

    public function update_trademark(Request $request,  $id){ // Actualiza una categoria en específico y regresa a la vista con la categoria actualizada
        Trademark::where('id', $id)->update([
            'marca' => $request->marca,
            'image' => $request->image,
        ]);

        return redirect()->route('categories.index');
    }

    public function destroy($id){ // Elimina una categoria en específico
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('categories.index');
    }
    public function destroy_trademark($id){ // Elimina una categoria en específico
        $trademark = Trademark::findOrFail($id);
        $trademark->delete();
        return redirect()->route('categories.index');
    }
}
