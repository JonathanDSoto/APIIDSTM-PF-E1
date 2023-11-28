<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){ // Muestra todas las categorias en una vista
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function show(Category $category){ // Muestra una categoria en específico en una vista
        return redirect()->route('categories.show', compact('category'));
    }

    public function edit(Category $category){ // Redirige a la vista de editar un categoria
        return redirect()->route('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category){ // Actualiza una categoria en específico y regresa a la vista con la categoria actualizada
        $category->categoria = $request->categoria;
        $category->save();
        
        return redirect()->route('categories.show', compact('category'));
    }
}
