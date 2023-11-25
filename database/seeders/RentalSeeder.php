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
        $rental->id_rate = 1;
        $rental->start_date = '2023-11-23';
        $rental->end_date = '2023-11-24';
        $rental->save();
    }
}
