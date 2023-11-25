<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Admin';
        $user->lastname = 'Admin';
        $user->phone = '123456789';
        $user->email = 'Admin@gmail.com';
        $user->password = bcrypt('123456789');
        $user->save();

        $user = new User();
        $user->name = 'Jose Ramon';
        $user->lastname = 'Villavicencio Alvarez';
        $user->phone = '987654321';
        $user->email = 'joseramonv_20@alu.uabcs.mx';
        $user->password = bcrypt('123456789');
        $user->save();
        
        User::factory()->count(18)->create();
    }
}
