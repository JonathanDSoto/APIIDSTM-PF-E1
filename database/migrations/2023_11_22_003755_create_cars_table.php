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

        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->bigInteger('id_marca');
            $table->foreign('id_marca')->references('id')->on('trademarks');
            $table->bigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categories');
            $table->boolean('is_avaliable')->default(true);
            $table->integer('tarifa');
            $table->foreign('tarifa')->references('tarifa')->on('rates');
            $table->text('image');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
