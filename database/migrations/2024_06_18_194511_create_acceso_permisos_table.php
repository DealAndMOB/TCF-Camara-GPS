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
        Schema::create('acceso_permisos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_usuario_id')->constrained('tipo_usuarios');
            $table->foreignId('permiso_id')->constrained('permisos');
            $table->boolean('estatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acceso_permisos');
    }
};
