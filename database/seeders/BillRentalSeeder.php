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
        $bill->metodo_pago = 'efectivo';
        $bill->save();

        $bill = new BillRental();
        $bill->id_renta = 2;
        $bill->metodo_pago = 'tarjeta';
        $bill->save();
    }
}
