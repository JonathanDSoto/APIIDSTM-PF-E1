<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Rental;
use App\Models\Category;
use App\Models\Rate;
use App\Http\Controllers\Controller;
use App\Models\Trademark;
use App\Models\VModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function index()
    {
        // Muestra todos los vehículos en una vista
        $cars = DB::table('cars')
            ->join('v_models', 'cars.v_models_id', '=', 'v_models.id')
            ->join('trademarks', 'cars.trademarks_id', '=', 'trademarks.id')
            ->join('categories', 'cars.categories_id', '=', 'categories.id')
            ->join('rates', 'cars.rates_id', '=', 'rates.id')
            ->select(
                'cars.id',
                'v_models.nombre',
                'trademarks.marca',
                'categories.categoria',
                'cars.is_avaliable',
                'cars.trademarks_id',
                'cars.v_models_id',
                'cars.categories_id',
                'cars.rates_id',
                'rates.tarifa',
                'cars.image',
                'cars.created_at',
                'cars.updated_at'
            )
            ->get();

        $models = VModel::all();
        $trademarks = Trademark::all();
        $categories = Category::all();
        $rates = Rate::all();
        $data = ['cars' => $cars, 'models' => $models, 'trademarks' => $trademarks, 'categories' => $categories, 'rates' => $rates];

        return view('vehicles.index', compact('data'));
    }

    public function store(Request $request)
    {
        // Redirige a la vista de crear un vehículo
        $car = new Car();
        $car->v_models_id = $request->v_models_id;
        $car->trademarks_id = $request->trademarks_id;
        $car->categories_id = $request->categories_id;
        $car->rates_id = $request->rates_id;
        $car->save();
        return redirect()->route('vehicles.index');
    }

/*     public function show($id)
    {
        // Muestra un vehículo en específico en una vista

        $car = DB::table('cars')
        ->join('v_models', 'cars.v_models_id', '=', 'v_models.id')
        ->join('trademarks', 'cars.trademarks_id', '=', 'trademarks.id')
        ->join('categories', 'cars.categories_id', '=', 'categories.id')
        ->join('rates', 'cars.rates_id', '=', 'rates.id')
        ->select(
            'cars.id',
            'v_models.nombre',
            'trademarks.marca',
            'categories.categoria',
            'cars.is_avaliable',
            'cars.trademarks_id',
            'cars.v_models_id',
            'cars.categories_id',
            'cars.rates_id',
            'rates.tarifa',
            'cars.image',
            'cars.created_at',
            'cars.updated_at'
        )
        ->where('cars.id', $id)
        ->first();

        return $car;
    } */

    public function edit(Car $car)
    {
        // Redirige a la vista de editar un vehículo
        return redirect()->route('vehicles.edit', compact('car'));
    }

    public function update(Request $request,  $id)
    {

        Car::where('id', $id)->update([
            'v_models_id' => $request->v_models_id,
            'trademarks_id' => $request->trademarks_id,
            'categories_id' => $request->categories_id,
            'is_avaliable' => $request->is_avaliable,
            'rates_id' => $request->rates_id,
        ]);

        return redirect()->route('vehicles.index');
    }


    public function history()
    {
        $cars = DB::table('cars')
            ->join('v_models', 'cars.v_models_id', '=', 'v_models.id')
            ->join('trademarks', 'cars.trademarks_id', '=', 'trademarks.id')
            ->join('categories', 'cars.categories_id', '=', 'categories.id')
            ->join('rates', 'cars.rates_id', '=', 'rates.id')
            ->select(
                'cars.id',
                'v_models.nombre',
                'trademarks.marca',
                'categories.categoria',
                'cars.is_avaliable',
                'cars.trademarks_id',
                'cars.v_models_id',
                'cars.categories_id',
                'cars.rates_id',
                'rates.tarifa',
                'cars.image',
                'cars.created_at',
                'cars.updated_at'
            )
            ->get();

        $models = VModel::all();
        $trademarks = Trademark::all();
        $categories = Category::all();
        $rates = Rate::all();
        $rentals = Rental::all();
        $data = ['cars' => $cars, 'models' => $models, 'trademarks' => $trademarks, 'categories' => $categories, 'rates' => $rates, 'rentals' => $rentals];
        return view('vehicles.history', compact('data'));
    }

    public function tax()
    {
        $cars = DB::table('cars')
            ->join('v_models', 'cars.v_models_id', '=', 'v_models.id')
            ->join('trademarks', 'cars.trademarks_id', '=', 'trademarks.id')
            ->join('categories', 'cars.categories_id', '=', 'categories.id')
            ->join('rates', 'cars.rates_id', '=', 'rates.id')
            ->select(
                'cars.id',
                'v_models.nombre',
                'trademarks.marca',
                'categories.categoria',
                'cars.is_avaliable',
                'rates.tarifa'

            )
            ->get();
        $data = ['cars' => $cars,];
        return view('vehicles.tax', compact('data'));
    }

    public function destroy($id)
    {
        // Elimina un vehículo en específico
        $car = Car::findOrFail($id);
        $car->delete();
        return redirect()->route('vehicles.index');
    }
}
