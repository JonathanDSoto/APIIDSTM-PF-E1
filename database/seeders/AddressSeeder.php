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
        $address->address = 'Calle 1';
        $address->code_postal = '23000';
        $address->residence_number = '1';
        $address->save();

        Address::factory()->count(19)->create();
    }
}
