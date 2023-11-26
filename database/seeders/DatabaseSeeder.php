<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(RememberPasswordSeeder::class);
        $this->call(AddressSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(TrademarkSeeder::class);
        $this->call(RateSeeder::class);
        $this->call(CarSeeder::class);
        $this->call(RentalSeeder::class);
        $this->call(BillRentalSeeder::class);
    }
}
