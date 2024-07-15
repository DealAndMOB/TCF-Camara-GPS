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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 200);
            $table->string('apellido_materno', 200);
            $table->string('apellido_paterno', 200);
            $table->date('fecha_nacimiento');
            $table->string('genero', 10);
            $table->string('telefono', 10);
            $table->foreignId('domicilio_id')->nullable()->constrained('domicilios')->onDelete('cascade');
            $table->boolean('estatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
