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
        $bill->user_id = 1;
        $bill->address_id = 1;
        $bill->save();

        BillRental::factory()->count(19)->create();
    }
}
