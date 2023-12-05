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
            $table->foreignId('v_models_id')->constrained();
            $table->foreignId('trademarks_id')->constrained();
            $table->unsignedBigInteger('categories_id');
            $table->boolean('is_avaliable')->default(true);
            $table->foreignId('rates_id')->constrained();
            $table->text('image')->nullable();

            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
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