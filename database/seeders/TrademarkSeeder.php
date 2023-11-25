<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trademark;

class TrademarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trademark = new Trademark();
        $trademark->marca = 'Ferrari';
        $trademark->image = '..\assets\img\svgs\ferrari.svg';
        $trademark->save();
        
        $trademark = new Trademark();
        $trademark->marca = 'Jeep';
        $trademark->image = '..\assets\img\svgs\jeep.svg';
        $trademark->save();
        
        $trademark = new Trademark();
        $trademark->marca = 'Volvo';
        $trademark->image = '..\assets\img\svgs\volvo.svg';
        $trademark->save();
        
        $trademark = new Trademark();
        $trademark->marca = 'Mazda';
        $trademark->image = '..\assets\img\svgs\mazda.svg';
        $trademark->save();
        
        $trademark = new Trademark();
        $trademark->marca = 'Hyunday';
        $trademark->image = '..\assets\img\svgs\huynday.svg';
        $trademark->save();

        
        $trademark = new Trademark();
        $trademark->marca = 'Subaru';
        $trademark->image = '..\assets\img\svgs\subaru.svg';
        $trademark->save();

        
        $trademark = new Trademark();
        $trademark->marca = 'Kia';
        $trademark->image = '..\assets\img\svgs\kia.svg';
        $trademark->save();

        
        $trademark = new Trademark();
        $trademark->marca = 'Jaguar';
        $trademark->image = '..\assets\img\svgs\jaguar.svg';
        $trademark->save();

        
        $trademark = new Trademark();
        $trademark->marca = 'Chrysler';
        $trademark->image = '..\assets\img\svgs\chrysler.svg';
        $trademark->save();

        
        $trademark = new Trademark();
        $trademark->marca = 'Lexus';
        $trademark->image = '..\assets\img\svgs\lexus.svg';
        $trademark->save();
    }
}
