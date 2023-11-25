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
        $car->model = 'Aveo';
        $car->id_marca = 1;
        $car->id_categoria = 1;
        $car->is_avaliable = true;
        $car->tarifa = 100;
        $car->image = 'https://acroadtrip.blob.core.windows.net/publicaciones-imagenes/Large/chevrolet/aveo/mx/RT_PU_d2c74b59011b42f491be8ff1324cd010.webp';
        $car->save();

        Car::factory()->count(19)->create();
    }
}
