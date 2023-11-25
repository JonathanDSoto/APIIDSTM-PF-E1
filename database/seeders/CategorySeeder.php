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
        $category->categoria = 'Camioneta';
        $category->save();

        
        $category = new Category();
        $category->categoria = 'Deportivo';
        $category->save();

        
        $category = new Category();
        $category->categoria = 'Automovil';
        $category->save();

        
        $category = new Category();
        $category->categoria = 'Pick up';
        $category->save();
    }
}
