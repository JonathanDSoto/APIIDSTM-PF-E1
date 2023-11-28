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
        $rental->id_client = 1;
        $rental->id_vehicle = 1;
        $rental->id_rate = 4;
        $rental->start_date = '2023-11-23';
        $rental->end_date = '2024-12-23';
        $rental->save();

        $rental = new Rental();
        $rental->id_client = 2;
        $rental->id_vehicle = 2;
        $rental->id_rate = 1;
        $rental->start_date = '2023-11-23';
        $rental->end_date = '2023-12-23';
        $rental->save();
    }
}
