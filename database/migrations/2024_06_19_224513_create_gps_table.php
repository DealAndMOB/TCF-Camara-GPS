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
        Schema::create('gps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehiculo_id');
            $table->decimal('latitud', 10, 8);
            $table->decimal('longitud', 11, 8);
            $table->float('velocidad');
            $table->string('direccion', 255);
            $table->string('resolucion', 20);
            $table->boolean('estatus')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gps');
    }
};
