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
        $rate->descripcion = 'Clase A por dia';
        $rate->tarifa = 100;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase A por semana';
        $rate->tarifa = 500;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase A por mes';
        $rate->tarifa = 1500;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase A anual';
        $rate->tarifa = 15000;
        $rate->save();
        
        
        $rate = new Rate();
        $rate->descripcion = 'Clase B por dia';
        $rate->tarifa = 150;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase B por semana';
        $rate->tarifa = 750;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase B por mes';
        $rate->tarifa = 2250;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase B anual';
        $rate->tarifa = 20000;
        $rate->save();
        

        $rate = new Rate();
        $rate->descripcion = 'Clase C por dia';
        $rate->tarifa = 200;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase C por semana';
        $rate->tarifa = 1000;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase C por mes';
        $rate->tarifa = 3000;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase C anual';
        $rate->tarifa = 30000;
        $rate->save();
        
        
        $rate = new Rate();
        $rate->descripcion = 'Clase D por dia';
        $rate->tarifa = 250;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase D por semana';
        $rate->tarifa = 1250;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase D por mes';
        $rate->tarifa = 3750;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase D anual';
        $rate->tarifa = 37500;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase E por dia';
        $rate->tarifa = 500;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase E por semana';
        $rate->tarifa = 2500;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase E por mes';
        $rate->tarifa = 7500;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase E anual';
        $rate->tarifa = 75000;
        $rate->save();
        
        
        $rate = new Rate();
        $rate->descripcion = 'Clase F por dia';
        $rate->tarifa = 600;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase F por semana';
        $rate->tarifa = 3000;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase F por mes';
        $rate->tarifa = 9000;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase F anual';
        $rate->tarifa = 90000;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase J por dia';
        $rate->tarifa = 800;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase J por semana';
        $rate->tarifa = 4000;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase J por mes';
        $rate->tarifa = 12000;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase J anual';
        $rate->tarifa = 120000;
        $rate->save();
        
        
        $rate = new Rate();
        $rate->descripcion = 'Clase M por dia';
        $rate->tarifa = 1000;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase M por semana';
        $rate->tarifa = 5000;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase M por mes';
        $rate->tarifa = 15000;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase M anual';
        $rate->tarifa = 150000;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase S por dia';
        $rate->tarifa = 1500;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase S por semana';
        $rate->tarifa = 7500;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase S por mes';
        $rate->tarifa = 22500;
        $rate->save();

        
        $rate = new Rate();
        $rate->descripcion = 'Clase S anual';
        $rate->tarifa = 225000;
        $rate->save();
    }
}
