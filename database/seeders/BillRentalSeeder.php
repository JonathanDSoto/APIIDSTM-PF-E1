<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BillRental;

class BillRentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bill = new BillRental();
        $bill->id_renta = 1;
        $bill->address_id = 1;
        $bill->save();

        $bill = new BillRental();
        $bill->id_renta = 2;
        $bill->address_id = 2;
        $bill->save();

        $bill = new BillRental();
        $bill->id_renta = 4;
        $bill->address_id = 4;
        $bill->save();

        $bill = new BillRental();
        $bill->id_renta = 8;
        $bill->address_id = 8;
        $bill->save();

        $bill = new BillRental();
        $bill->id_renta = 6;
        $bill->address_id = 6;
        $bill->save();

        $bill = new BillRental();
        $bill->id_renta = 7;
        $bill->address_id = 7;
        $bill->save();

        $bill = new BillRental();
        $bill->id_renta = 5;
        $bill->address_id = 5;
        $bill->save();

        $bill = new BillRental();
        $bill->id_renta = 10;
        $bill->address_id = 10;
        $bill->save();

        $bill = new BillRental();
        $bill->id_renta = 3;
        $bill->address_id = 3;
        $bill->save();

        $bill = new BillRental();
        $bill->id_renta = 9;
        $bill->address_id = 9;
        $bill->save();
    }
}
