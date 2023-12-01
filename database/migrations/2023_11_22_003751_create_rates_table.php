<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->enum('categoria', ['Clase A: Autos pequeños', 'Clase B: Autos pequeños', 'Clase C: Autos medianos', 'Clase D: Autos grandes', 'Clase E: Autos de gama alta', 'Clase F: Autos de lujo', 'Clase J: Vehículos SUV con equipamiento deportivo', 'Clase M: MPV vehiculos polivalentes', 'Clase S: Vehículos deportivos']);
            $table->integer('tarifa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rates');
    }
};
