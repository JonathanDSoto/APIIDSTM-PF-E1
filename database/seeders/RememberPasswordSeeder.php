<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RememberPassword;

class RememberPasswordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rememberPassword = new RememberPassword();
        $rememberPassword->id_user = 1;
        $rememberPassword->email = 'Admin@gmail.com'; 
        $rememberPassword->new_password = bcrypt('1234');
        $rememberPassword->save();
    }
}
