<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = new Client();
        $client->name = 'Juan';
        $client->lastname = 'Perez';
        $client->email = 'jupe@gmail.com';
        $client->phone = '6601234567';
        $client->id_address = '1';
        $client->save();

        $client = new Client();
        $client->name = 'Pedro';
        $client->lastname = 'Lopez';
        $client->email = 'pelo@gmail.com';
        $client->phone = '9865197516';
        $client->id_address = '2';
        $client->save();

        $client = new Client();
        $client->name = 'Maria';
        $client->lastname = 'Gonzalez';
        $client->email = 'mago@gmail.com';
        $client->phone = '1234567890';
        $client->id_address = '3';
        $client->save();

        $client = new Client();
        $client->name = 'Jose';
        $client->lastname = 'Rodriguez';
        $client->email = 'joro@hotmail.com';
        $client->phone = '0446548975';
        $client->id_address = '4';
        $client->save();

        $client = new Client();
        $client->name = 'Ana';
        $client->lastname = 'Martinez';
        $client->email = 'anma@outlock.com';
        $client->phone = '6122009874';
        $client->id_address = '5';
        $client->save();

        $client = new Client();
        $client->name = 'Juan';
        $client->lastname = 'Gomez';
        $client->email = 'juan.gomez@uabcs.mx';
        $client->phone = '6123456789';
        $client->id_address = '6';
        $client->save();

        $client = new Client();
        $client->name = 'Carlos';
        $client->lastname = 'López';
        $client->email = 'carlos.lopez@hotmail.com';
        $client->phone = '6125551234';
        $client->id_address = '7';
        $client->save();

        $client = new Client();
        $client->name = 'Elena';
        $client->lastname = 'Ramirez';
        $client->email = 'elena.ramirez@gmail.com';
        $client->phone = '6128765432';
        $client->id_address = '8';
        $client->save();

        $client = new Client();
        $client->name = 'Jorge';
        $client->lastname = 'Perez';
        $client->email = 'jorge.perez@outlock.com';
        $client->phone = '6129876543';
        $client->id_address = '9';
        $client->save();

        $client = new Client();
        $client->name = 'Laura';
        $client->lastname = 'Rodriguez';
        $client->email = 'laura.rodriguez@uabcs.mx';
        $client->phone = '6123334444';
        $client->id_address = '10';
        $client->save();
    }
}
