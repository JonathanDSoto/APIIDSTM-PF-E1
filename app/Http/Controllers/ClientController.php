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
        
        return redirect()->route('clients.index')->with([
            'toast' => [
                'type' => 'success',
                'message' => 'Cliente creado exitosamente',
            ],
        ]);
    }

    public function show(Client $client){ // Muestra un cliente en específico en una vista
        return redirect()->route('clients.show', compact('client'));
    }

    public function edit(Client $client){ // Redirige a la vista de editar un cliente
        return redirect()->route('clients.edit', compact('client'));
    }
    

    public function history(){ // Muestra el historial de un cliente en específico
        return view('clients.history');
    }
    
    public function update(Request $request, Client $client, Address $address){ // Actualiza un cliente en específico y regresa a la vista con el cliente actualizado
        
        $address = $client->idAddress ?: new Address();

        $address->address = $request->addressEdit;
        $address->code_postal = $request->code_postalEdit;
        $address->residence_number = $request->residence_numberEdit;

        $client->name = $request->nameEdit;
        $client->lastname = $request->lastnameEdit;
        $client->email = $request->emailEdit;
        $client->phone = $request->phoneEdit;
        $client->id_address = $address->id;
        $clients = Client::all();
        return redirect()->route('clients.index', compact('client', 'clients'))->with([
            'toast' => [
                'type' => 'success',
                'message' => 'Cliente actualizado exitosamente',
            ],
        ]);
    }

    public function drop(Client $client){ // Elimina un cliente en específico
        $client->delete();
        return redirect()->route('clients.index')->with([
            'toast' => [
                'type' => 'success',
                'message' => 'Cliente Eliminado exitosamente',
            ],
        ]);
    }

}

