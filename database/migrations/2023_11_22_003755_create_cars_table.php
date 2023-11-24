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
            $table->foreignId('trademarks_id')->constrained();
            $table->foreignId('categories_id')->constrained();
            $table->boolean('is_avaliable')->default(true);
            $table->foreignId('rates_tarifa')->constrained();
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
