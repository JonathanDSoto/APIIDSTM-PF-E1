<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rental;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rental = new Rental();
        $rental->client_id = 1;
        $rental->id_vehiculo = 1;
        $rental->rates_id = 4;
        $rental->initial_day = '2023-11-23';
        $rental->delivery_day = '2024-12-23';
        $rental->save();

        $rental = new Rental();
        $rental->client_id = 2;
        $rental->id_vehiculo = 2;
        $rental->rates_id = 1;
        $rental->initial_day = '2023-11-23';
        $rental->delivery_day = '2023-12-23';
        $rental->save();
    }
}
