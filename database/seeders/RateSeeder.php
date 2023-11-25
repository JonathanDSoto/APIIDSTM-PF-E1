<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rate;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rate = new Rate();
        $rate->tarifa = 100;
        $rate->save();

        
        $rate = new Rate();
        $rate->tarifa = 500;
        $rate->save();

        
        $rate = new Rate();
        $rate->tarifa = 1500;
        $rate->save();

        
        $rate = new Rate();
        $rate->tarifa = 15000;
        $rate->save();
    }
}
