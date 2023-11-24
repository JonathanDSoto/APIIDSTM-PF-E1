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
        Schema::disableForeignKeyConstraints();

        Schema::create('rentals', function (Blueprint $table) {
            $table->id()->foreign('cars.id');
            $table->foreignId('client_id')->constrained();
            $table->bigInteger('id_vehiculo');
            $table->bigInteger('id_tarifa');
            $table->foreignId('rates_id')->constrained();
            $table->dateTime('initial_day');
            $table->dateTime('delivery_day');
            $table->tinyInteger('days');
            $table->integer('total');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
