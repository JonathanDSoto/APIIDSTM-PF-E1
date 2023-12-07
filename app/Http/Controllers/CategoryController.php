<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){ // Muestra todas las categorias en una vista
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        // Redirige a la vista de crear un vehículo
        $category = new Category();
        $category->categoria = $request->categoria;
        $category->save();
        return redirect()->route('categories.index');
    }

/*     public function show(Category $category){ // Muestra una categoria en específico en una vista
        return redirect()->route('categories.show', compact('category'));
    } */

/*     public function edit(Category $category){ // Redirige a la vista de editar un categoria
        return redirect()->route('categories.edit', compact('category'));
    } */

    public function update(Request $request,  $id){ // Actualiza una categoria en específico y regresa a la vista con la categoria actualizada
        Category::where('id', $id)->update([
            'categoria' => $request->categoria,
        ]);

        return view('categories.index');
    }

    public function destroy($id){ // Elimina una categoria en específico
        $category = Category::findOrFail($id);
        $category->delete();
        return view('categories.index');
    }

/*     public function categoryCars(Category $category){ // Muestra los vehiculos de una categoria en específico
        $cars = Car::where('categories_id', $category->id)->get();
        return view('categories.categoryCars', compact('cars', 'category'));
    } */
}
