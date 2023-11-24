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
        Schema::create('bill_rentals', function (Blueprint $table) {
            $table->id()->foreign('rental.id');
            $table->bigInteger('id_renta');
            $table->enum('metodo_pago', ['efectivo', 'tarjeta', 'paypal', 'transferencia']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill_rentals');
    }
};
