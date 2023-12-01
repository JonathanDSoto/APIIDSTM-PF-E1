<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Address;
use App\Models\BillRental;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){ // Muestra todos los clientes en una vista
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function create(Request $request){ // Crea un cliente y regresa a la vista clientes
        $address = new Address();
        $address->address = $request->address;
        $address->code_postal = $request->code_postal;
        $address->residence_number = $request->residence_number;
        $address->save();

        $client = new Client();
        $client->name = $request->name;
        $client->lastname = $request->lastname;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->id_address = $address->id;
        $client->save();
        
        return view('clients.index');
    }

    public function show(Client $client){ // Muestra un cliente en específico en una vista
        return redirect()->route('clients.show', compact('client'));
    }

    public function edit(Client $client){ // Redirige a la vista de editar un cliente
        return redirect()->route('clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client, Address $address){ // Actualiza un cliente en específico y regresa a la vista con el cliente actualizado
        $address->address = $request->address;
        $address->code_postal = $request->code_postal;
        $address->residence_number = $request->residence_number;
        $address->save();

        $client->name = $request->name;
        $client->lastname = $request->lastname;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->id_address = $address->id;
        $client->save();
        
        return redirect()->route('clients.index', compact('client'));
    }

    public function drop(Client $client){ // Elimina un cliente en específico
        $client->delete();
        return redirect()->route('clients.index');
    }

    public function history(Client $client){ // Muestra el historial de un cliente en específico
        $billRentals = BillRental::where('clients_id', $client->id)->get();
        return view('clients.history', compact('billRentals', 'client'));
    }
}
