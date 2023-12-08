<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\Rental;
use App\Models\BillRental;
use App\Models\Car;
use App\Models\Rate;
use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log; 
use Illuminate\Support\Facades\Validator;

class RentalController extends Controller
{
    public function index(){ // Muestra todos los alquileres en una vista
        $rentals = Rental::with(['billRental', 'idTarifa','car.vmodel'])->get();
        $clients = Client::all();
        $rates = Rate::all();
        $cars = Car::where('is_avaliable', 1)->get();
        
        foreach ($rentals as $rental) {
            $rental->dias_diferencia = Carbon::parse($rental->delivery_day)->diffInDays($rental->initial_day);

            switch ($rental->idTarifa->descripcion) {
                case 'Diario':
                    $rental->total = $rental->dias_diferencia * $rental->idTarifa->tarifa;
                    break;
                case 'Semanal':
                    $rental->total = ceil($rental->dias_diferencia / 7) * $rental->idTarifa->tarifa;
                    break;
                case 'Mensual':
                    $rental->total = ceil($rental->dias_diferencia / 30) * $rental->idTarifa->tarifa;
                    break;
                case 'Anual':
                    $rental->total = ceil($rental->dias_diferencia / 365) * $rental->idTarifa->tarifa;
                    break;
                default:
                    $rental->total = 0; 
            }
           // Obtén el nombre del modelo usando la relación sin intentar modificarla
        $modelName = $rental->car->vmodel->name ?? 'Nombre no disponible';

        // Agrega el nombre del modelo como una propiedad en Rental
        $rental->car_model_name = $modelName;
        }
        return view('rentals.index', compact('rentals','clients','cars','rates'));
    }

    public function create(Request $request){ // Crea un alquiler y regresa a la vista alquileres
        // Validar los datos del formulario según tus necesidades
        Log::info('Llegó al controlador con datos: ' . json_encode($request->all()));
       
        /* Validación de datos
        $validator = Validator::make($request->all(), [
            'modalCliente' => 'required|integer',
            'modalVehiculo' => 'required|integer',
            'modalTarifa' => 'required|integer',
            'modalprestamo' => 'required|date',
            'modalEntrega' => 'required|date|',
            'modalTotal' => 'required|string',
            'modalpago' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->route('rentals.index')->with('error', 'Error de validación. Por favor, revisa los campos.');
        }
        */
        try {
            DB::transaction(function () use ($request) {
                $rental = new Rental();
                $rental->client_id = $request->modalCliente;
                $rental->id_vehiculo = $request->modalVehiculo;
                $rental->rates_id = $request->modalTarifa;
                $rental->initial_day = $request->modalprestamo;
                $rental->delivery_day = $request->modalEntrega;
                $rental->save();
        
                // Guarda la información de la factura
                $billRental = new BillRental();
                $billRental->metodo_pago = $request->modalpago;
                $billRental->id_renta = $rental->id;
                $billRental->save();

                Log::info('Renta y factura creadas exitosamente.');
            });
        

                
            //});

            return redirect()->route('rentals.index')->with('success', 'Renta creada exitosamente.');
        } catch (\Exception $e) {
            
            Log::error('Error al crear la renta. Detalles: ' . $e->getMessage());

            return redirect()->route('rentals.index')->with('error', 'Error al crear la renta. Detalles: ' . $e->getMessage());
        }
    }

    public function show(Rental $rental){ // Muestra un alquiler en específico en una vista
        return redirect()->route('rentals.show', compact('rental'));
    }

    public function edit(Rental $rental){ // Redirige a la vista de editar un alquiler
        return redirect()->route('rentals.edit', compact('rental'));
    }

    public function update(Request $request, Rental $rental){ // Actualiza un alquiler en específico y regresa a la vista con el alquiler actualizado
        $rate = Rate::where('id', $request->id_tarifa);
        $car = Car::where('id', $request->id_vehiculo);
        
        if($car->is_avaliable == true){
            $rental->id_cliente = $request->id_cliente;
            $rental->id_vehiculo = $request->id_vehiculo;
            $rental->id_tarifa = $request->id_tarifa;
            $rental->fecha_inicio = $request->fecha_inicio;
            $rental->fecha_fin = $request->fecha_fin;
            $rental->total = $rate->tarifa;
            $rental->save();
    
            $car->is_avaliable = false;
            $car->save();
            
            return redirect()->route('rentals.show', compact('rental'));
        } else {
            return redirect()->route('rentals.show', compact('rental'));
        }
    }
    public function getRentalData(Rental $rental)
{
    $data = [
        'client_id' => $rental->client_id,
        'id_vehiculo' => $rental->id_vehiculo,
        'initial_day' => $rental->initial_day,
        'delivery_day' => $rental->delivery_day,
        'id_tarifa' => $rental->id_tarifa,
        'billRental' => $rental->billRental,
    ];

    return response()->json($data);
}

}