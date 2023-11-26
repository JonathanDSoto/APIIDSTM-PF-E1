<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $address = new Address();
        $address->address = 'Avenida Central';
        $address->code_postal = '20040';
        $address->residence_number = '7E';
        $address->save();

        $address = new Address();
        $address->address = 'Calle 15';
        $address->code_postal = '18050';
        $address->residence_number = '2F';
        $address->save();

        $address = new Address();
        $address->address = 'Boulevard 8';
        $address->code_postal = '25030';
        $address->residence_number = '9G';
        $address->save();

        $address = new Address();
        $address->address = 'Ronda 6';
        $address->code_postal = '19020';
        $address->residence_number = '4H';
        $address->save();

        $address = new Address();
        $address->address = 'Pasaje 11';
        $address->code_postal = '22015';
        $address->residence_number = '6I';
        $address->save();


        $address = new Address();
        $address->address = 'Avenida Principal';
        $address->code_postal = '28050';
        $address->residence_number = '12B';
        $address->save();

        $address = new Address();
        $address->address = 'Calle 10';
        $address->code_postal = '15060';
        $address->residence_number = '5A';
        $address->save();

        $address = new Address();
        $address->address = 'Avenida 3';
        $address->code_postal = '31040';
        $address->residence_number = '8C';
        $address->save();

        $address = new Address();
        $address->address = 'Callejón 7';
        $address->code_postal = '18025';
        $address->residence_number = '3B';
        $address->save();

        $address = new Address();
        $address->address = 'Paseo 12';
        $address->code_postal = '26015';
        $address->residence_number = '10D';
        $address->save();
    }
}
