<?php

namespace Database\Seeders;

use App\Models\VModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $car = new VModel();
        $car->nombre = 'MDX';
        $car->trademarks_id = 1;
        $car->save();

        $car = new VModel();
        $car->nombre = 'RDX';
        $car->trademarks_id = 1;
        $car->save();

        $car = new VModel();
        $car->nombre = 'ILX';
        $car->trademarks_id = 1;
        $car->save();

        $car = new VModel();
        $car->nombre = 'Giulia';
        $car->trademarks_id = 2;
        $car->save();

        $car = new VModel();
        $car->nombre = 'Stelvio';
        $car->trademarks_id = 2;
        $car->save();

        $car = new VModel();
        $car->nombre = '4C';
        $car->trademarks_id = 2;
        $car->save();

        $car = new VModel();
        $car->nombre = 'Vantage';
        $car->trademarks_id = 4;
        $car->save();

        $car = new VModel();
        $car->nombre = 'DB11';
        $car->trademarks_id = 4;
        $car->save();

        $car = new VModel();
        $car->nombre = 'DBS';
        $car->trademarks_id = 4;
        $car->save();

        $car = new VModel();
        $car->nombre = '124 Spider';
        $car->trademarks_id = 18;
        $car->save();

        $car = new VModel();
        $car->nombre = 'Panda';
        $car->trademarks_id = 18;
        $car->save();

        $car = new VModel();
        $car->nombre = '500X';
        $car->trademarks_id = 18;
        $car->save();

    }
}