<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $car = new Car();
        $car->v_models_id = 1;
        $car->trademarks_id = 1;
        $car->categories_id = 1; // Clase A
        $car->is_avaliable = false;
        $car->rates_id = 4; // Clasificación para Clase A
        $car->image = '';
        $car->save();

        $car = new Car();
        $car->v_models_id = 2;
        $car->trademarks_id = 1;
        $car->categories_id = 2; // Clase B
        $car->is_avaliable = false;
        $car->rates_id = 7; // Clasificación para Clase B
        $car->image = '';
        $car->save();

        $car = new Car();
        $car->v_models_id = 3;
        $car->trademarks_id = 1;
        $car->categories_id = 3; // Clase C
        $car->is_avaliable = true;
        $car->rates_id = 11; // Clasificación para Clase C
        $car->image = '';
        $car->save();

        $car = new Car();
        $car->v_models_id = 1;
        $car->trademarks_id = 1;
        $car->categories_id = 4; // Clase D
        $car->is_avaliable = true;
        $car->rates_id = 15; // Clasificación para Clase D
        $car->image = '';
        $car->save();

        $car = new Car();
        $car->v_models_id = 2;
        $car->trademarks_id = 1;
        $car->categories_id = 5; // Clase E
        $car->is_avaliable = true;
        $car->rates_id = 20; // Clasificación para Clase E
        $car->image = '';
        $car->save();

        $car = new Car();
        $car->v_models_id = 4;
        $car->trademarks_id = 2;
        $car->categories_id = 1; // Clase A
        $car->is_avaliable = true;
        $car->rates_id = 4; // Clasificación para Clase A
        $car->image = '';
        $car->save();

        $car = new Car();
        $car->v_models_id = 5;
        $car->trademarks_id = 2;
        $car->categories_id = 2; // Clase B
        $car->is_avaliable = true;
        $car->rates_id = 7; // Clasificación para Clase B
        $car->image = '';
        $car->save();

        $car = new Car();
        $car->v_models_id = 6;
        $car->trademarks_id = 2;
        $car->categories_id = 3; // Clase C
        $car->is_avaliable = true;
        $car->rates_id = 11; // Clasificación para Clase C
        $car->image = '';
        $car->save();

        $car = new Car();
        $car->v_models_id = 4;
        $car->trademarks_id = 2;
        $car->categories_id = 4; // Clase D
        $car->is_avaliable = true;
        $car->rates_id = 15; // Clasificación para Clase D
        $car->image = '';
        $car->save();

        $car = new Car();
        $car->v_models_id = 5;
        $car->trademarks_id = 2;
        $car->categories_id = 5; // Clase E
        $car->is_avaliable = true;
        $car->rates_id = 20; // Clasificación para Clase E
        $car->image = '';
        $car->save();
    }
}
