<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new Category();
        $category->categoria = 'Clase A: Autos pequeños';
        $category->save();

        
        $category = new Category();
        $category->categoria = 'Clase B: Autos pequeños';
        $category->save();

        
        $category = new Category();
        $category->categoria = 'Clase C: Autos medianos';
        $category->save();

        
        $category = new Category();
        $category->categoria = 'Clase D: Autos grandes';
        $category->save();

        
        $category = new Category();
        $category->categoria = 'Clase E: Autos de gama alta';
        $category->save();

        
        $category = new Category();
        $category->categoria = 'Clase F: Autos de lujo';
        $category->save();

        
        $category = new Category();
        $category->categoria = 'CLase J: Vehículos SUV con equipamiento deportivo';
        $category->save();

        $category = new Category();
        $category->categoria = 'Clase M: MPV vehiculos polivalentes';
        $category->save();

        $category = new Category();
        $category->categoria = 'Clase S: Vehículos deportivos';
        $category->save();
    }
}
