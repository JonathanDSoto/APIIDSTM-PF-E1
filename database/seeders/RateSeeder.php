<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rate;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rate = new Rate();
        $rate->descripcion = 'Diario';
        $rate->tarifa = 100;
        $rate->categoria = 'Clase A: Autos pequeños';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Semanal';
        $rate->tarifa = 500;
        $rate->categoria = 'Clase A: Autos pequeños';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Mensual';
        $rate->tarifa = 1500;
        $rate->categoria = 'Clase A: Autos pequeños';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Anual';
        $rate->tarifa = 15000;
        $rate->categoria = 'Clase A: Autos pequeños';
        $rate->save();
        
        
        $rate = new Rate();
        $rate->descripcion = 'Diario';
        $rate->tarifa = 150;
        $rate->categoria = 'Clase B: Autos pequeños';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Semanal';
        $rate->tarifa = 750;
        $rate->categoria = 'Clase B: Autos pequeños';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Mensual';
        $rate->tarifa = 2250;
        $rate->categoria = 'Clase B: Autos pequeños';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Anual';
        $rate->tarifa = 20000;
        $rate->categoria = 'Clase B: Autos pequeños';
        $rate->save();
        

        $rate = new Rate();
        $rate->descripcion = 'Diario';
        $rate->tarifa = 200;
        $rate->categoria = 'Clase C: Autos medianos';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Semanal';
        $rate->tarifa = 1000;
        $rate->categoria = 'Clase C: Autos medianos';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Mensual';
        $rate->tarifa = 3000;
        $rate->categoria = 'Clase C: Autos medianos';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Anual';
        $rate->tarifa = 30000;
        $rate->categoria = 'Clase C: Autos medianos';
        $rate->save();
        
        
        $rate = new Rate();
        $rate->descripcion = 'Diario';
        $rate->tarifa = 250;
        $rate->categoria = 'Clase D: Autos grandes';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Semanal';
        $rate->tarifa = 1250;
        $rate->categoria = 'Clase D: Autos grandes';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Mensual';
        $rate->tarifa = 3750;
        $rate->categoria = 'Clase D: Autos grandes';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Anual';
        $rate->tarifa = 37500;
        $rate->categoria = 'Clase D: Autos grandes';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Diario';
        $rate->tarifa = 500;
        $rate->categoria = 'Clase E: Autos de gama alta';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Semanal';
        $rate->tarifa = 2500;
        $rate->categoria = 'Clase E: Autos de gama alta';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Mensual';
        $rate->tarifa = 7500;
        $rate->categoria = 'Clase E: Autos de gama alta';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Anual';
        $rate->tarifa = 75000;
        $rate->categoria = 'Clase E: Autos de gama alta';
        $rate->save();
        
        
        $rate = new Rate();
        $rate->descripcion = 'Diario';
        $rate->tarifa = 600;
        $rate->categoria = 'Clase F: Autos de lujo';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Semanal';
        $rate->tarifa = 3000;
        $rate->categoria = 'Clase F: Autos de lujo';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Mensual';
        $rate->tarifa = 9000;
        $rate->categoria = 'Clase F: Autos de lujo';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Anual';
        $rate->tarifa = 90000;
        $rate->categoria = 'Clase F: Autos de lujo';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Diario';
        $rate->tarifa = 800;
        $rate->categoria = 'Clase J: Vehículos SUV con equipamiento deportivo';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Semanal';
        $rate->tarifa = 4000;
        $rate->categoria = 'Clase J: Vehículos SUV con equipamiento deportivo';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Mesual';
        $rate->tarifa = 12000;
        $rate->categoria = 'Clase J: Vehículos SUV con equipamiento deportivo';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Anual';
        $rate->tarifa = 120000;
        $rate->categoria = 'Clase J: Vehículos SUV con equipamiento deportivo';
        $rate->save();
        
        
        $rate = new Rate();
        $rate->descripcion = 'Diario';
        $rate->tarifa = 1000;
        $rate->categoria = 'Clase M: MPV vehiculos polivalentes';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Semanal';
        $rate->tarifa = 5000;
        $rate->categoria = 'Clase M: MPV vehiculos polivalentes';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Mensual';
        $rate->tarifa = 15000;
        $rate->categoria = 'Clase M: MPV vehiculos polivalentes';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Anual';
        $rate->tarifa = 150000;
        $rate->categoria = 'Clase M: MPV vehiculos polivalentes';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Diario';
        $rate->tarifa = 1500;
        $rate->categoria = 'Clase S: Vehículos deportivos';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Semanal';
        $rate->tarifa = 7500;
        $rate->categoria = 'Clase S: Vehículos deportivos';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Mensual';
        $rate->tarifa = 22500;
        $rate->categoria = 'Clase S: Vehículos deportivos';
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Anual';
        $rate->tarifa = 225000;
        $rate->categoria = 'Clase S: Vehículos deportivos';
        $rate->save();
    }
}
