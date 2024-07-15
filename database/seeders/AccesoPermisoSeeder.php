<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AccesoPermiso;

class AccesoPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accesosPermisos = [

            //Develops
            ['tipo_usuario_id' => 1, 'permiso_id' => 1, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 2, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 3, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 4, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 5, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 6, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 7, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 8, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 9, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 10, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 11, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 12, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 13, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 14, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 15, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 16, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 17, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 18, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 19, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 20, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 21, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 22, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 23, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 24, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 25, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 26, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 27, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 28, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 29, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 30, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 31, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 32, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 33, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 34, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 35, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 36, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 37, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 38, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 39, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 40, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 41, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 42, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 43, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 44, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 45, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 46, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 47, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 48, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 49, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 50, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 51, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 52, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 53, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 54, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 55, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 56, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 57, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 58, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 59, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 60, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 61, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 62, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 63, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 64, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 65, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 66, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 67, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 68, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 69, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 70, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 71, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 72, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 73, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 74, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 75, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 76, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 77, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 78, 'estatus' => true],
            ['tipo_usuario_id' => 1, 'permiso_id' => 79, 'estatus' => true],

            //Administrador General
            ['tipo_usuario_id' => 2, 'permiso_id' => 1, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 2, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 3, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 4, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 5, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 6, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 7, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 8, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 9, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 10, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 11, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 12, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 13, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 14, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 15, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 16, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 17, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 18, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 19, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 20, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 21, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 22, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 23, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 24, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 25, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 26, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 27, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 28, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 29, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 30, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 31, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 32, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 33, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 34, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 35, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 36, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 37, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 38, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 39, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 40, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 41, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 42, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 43, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 44, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 45, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 46, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 47, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 48, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 49, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 50, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 51, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 52, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 53, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 54, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 55, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 56, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 57, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 58, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 59, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 60, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 61, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 62, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 63, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 64, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 65, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 66, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 67, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 68, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 69, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 70, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 71, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 72, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 73, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 74, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 75, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 76, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 77, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 78, 'estatus' => true],
            ['tipo_usuario_id' => 2, 'permiso_id' => 79, 'estatus' => true],

            //Jefe de flota
            ['tipo_usuario_id' => 3, 'permiso_id' => 1, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 2, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 3, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 4, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 5, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 6, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 7, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 8, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 9, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 10, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 11, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 12, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 13, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 14, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 15, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 16, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 17, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 22, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 23, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 24, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 25, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 34, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 35, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 36, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 37, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 38, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 39, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 40, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 41, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 42, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 43, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 44, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 45, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 46, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 47, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 48, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 49, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 50, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 51, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 52, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 53, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 54, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 55, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 56, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 57, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 58, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 59, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 60, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 61, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 62, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 63, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 64, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 65, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 66, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 67, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 68, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 69, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 78, 'estatus' => true],
            ['tipo_usuario_id' => 3, 'permiso_id' => 79, 'estatus' => true],
            
            //Monitorista
            ['tipo_usuario_id' => 4, 'permiso_id' => 2, 'estatus' => true],
            ['tipo_usuario_id' => 4, 'permiso_id' => 6, 'estatus' => true],
            ['tipo_usuario_id' => 4, 'permiso_id' => 11, 'estatus' => true],
            ['tipo_usuario_id' => 4, 'permiso_id' => 15, 'estatus' => true],
            ['tipo_usuario_id' => 4, 'permiso_id' => 19, 'estatus' => true],
            ['tipo_usuario_id' => 4, 'permiso_id' => 23, 'estatus' => true],
            ['tipo_usuario_id' => 4, 'permiso_id' => 27, 'estatus' => true],
            ['tipo_usuario_id' => 4, 'permiso_id' => 28, 'estatus' => true],
            ['tipo_usuario_id' => 4, 'permiso_id' => 32, 'estatus' => true],
            ['tipo_usuario_id' => 4, 'permiso_id' => 35, 'estatus' => true],
            ['tipo_usuario_id' => 4, 'permiso_id' => 39, 'estatus' => true],
            ['tipo_usuario_id' => 4, 'permiso_id' => 43, 'estatus' => true],
            ['tipo_usuario_id' => 4, 'permiso_id' => 47, 'estatus' => true],
            ['tipo_usuario_id' => 4, 'permiso_id' => 51, 'estatus' => true],
            ['tipo_usuario_id' => 4, 'permiso_id' => 55, 'estatus' => true],
            ['tipo_usuario_id' => 4, 'permiso_id' => 59, 'estatus' => true],
            ['tipo_usuario_id' => 4, 'permiso_id' => 63, 'estatus' => true],
            ['tipo_usuario_id' => 4, 'permiso_id' => 67, 'estatus' => true],
            ['tipo_usuario_id' => 4, 'permiso_id' => 71, 'estatus' => true],
            ['tipo_usuario_id' => 4, 'permiso_id' => 75, 'estatus' => true],
            ['tipo_usuario_id' => 4, 'permiso_id' => 78, 'estatus' => true],
            ['tipo_usuario_id' => 4, 'permiso_id' => 79, 'estatus' => true],

            //Custodio
            ['tipo_usuario_id' => 5, 'permiso_id' => 1, 'estatus' => true],
            ['tipo_usuario_id' => 5, 'permiso_id' => 6, 'estatus' => true],
            ['tipo_usuario_id' => 5, 'permiso_id' => 11, 'estatus' => true],
            ['tipo_usuario_id' => 5, 'permiso_id' => 15, 'estatus' => true],
            ['tipo_usuario_id' => 5, 'permiso_id' => 19, 'estatus' => true],
            ['tipo_usuario_id' => 5, 'permiso_id' => 23, 'estatus' => true],
            ['tipo_usuario_id' => 5, 'permiso_id' => 27, 'estatus' => true],
            ['tipo_usuario_id' => 5, 'permiso_id' => 31, 'estatus' => true],
            ['tipo_usuario_id' => 5, 'permiso_id' => 35, 'estatus' => true],
            ['tipo_usuario_id' => 5, 'permiso_id' => 39, 'estatus' => true],
            ['tipo_usuario_id' => 5, 'permiso_id' => 40, 'estatus' => true],
            ['tipo_usuario_id' => 5, 'permiso_id' => 43, 'estatus' => true],
            ['tipo_usuario_id' => 5, 'permiso_id' => 47, 'estatus' => true],
            ['tipo_usuario_id' => 5, 'permiso_id' => 51, 'estatus' => true],
            ['tipo_usuario_id' => 5, 'permiso_id' => 55, 'estatus' => true],
            ['tipo_usuario_id' => 5, 'permiso_id' => 59, 'estatus' => true],
            ['tipo_usuario_id' => 5, 'permiso_id' => 67, 'estatus' => true],
            ['tipo_usuario_id' => 5, 'permiso_id' => 68, 'estatus' => true],
            ['tipo_usuario_id' => 5, 'permiso_id' => 69, 'estatus' => true],
            ['tipo_usuario_id' => 5, 'permiso_id' => 70, 'estatus' => true],
            ['tipo_usuario_id' => 5, 'permiso_id' => 71, 'estatus' => true],
            ['tipo_usuario_id' => 5, 'permiso_id' => 72, 'estatus' => true],
            ['tipo_usuario_id' => 5, 'permiso_id' => 78, 'estatus' => true],
            ['tipo_usuario_id' => 5, 'permiso_id' => 79, 'estatus' => true],

            //Administrador general empresa
            ['tipo_usuario_id' => 6, 'permiso_id' => 2, 'estatus' => true],
            ['tipo_usuario_id' => 6, 'permiso_id' => 6, 'estatus' => true],
            ['tipo_usuario_id' => 6, 'permiso_id' => 11, 'estatus' => true],
            ['tipo_usuario_id' => 6, 'permiso_id' => 27, 'estatus' => true],
            ['tipo_usuario_id' => 6, 'permiso_id' => 39, 'estatus' => true],
            ['tipo_usuario_id' => 6, 'permiso_id' => 43, 'estatus' => true],
            ['tipo_usuario_id' => 6, 'permiso_id' => 47, 'estatus' => true],
            ['tipo_usuario_id' => 6, 'permiso_id' => 55, 'estatus' => true],
            ['tipo_usuario_id' => 6, 'permiso_id' => 75, 'estatus' => true],
            ['tipo_usuario_id' => 6, 'permiso_id' => 78, 'estatus' => true],
            ['tipo_usuario_id' => 6, 'permiso_id' => 79, 'estatus' => true],

            //Monitorista empresa
            ['tipo_usuario_id' => 7, 'permiso_id' => 11, 'estatus' => true],
            ['tipo_usuario_id' => 7, 'permiso_id' => 27, 'estatus' => true],
            ['tipo_usuario_id' => 7, 'permiso_id' => 43, 'estatus' => true],
            ['tipo_usuario_id' => 7, 'permiso_id' => 47, 'estatus' => true],
            ['tipo_usuario_id' => 7, 'permiso_id' => 75, 'estatus' => true],
            ['tipo_usuario_id' => 7, 'permiso_id' => 78, 'estatus' => true],
            ['tipo_usuario_id' => 7, 'permiso_id' => 79, 'estatus' => true],
        ];



        foreach ($accesosPermisos as $accesosPermiso) {
            AccesoPermiso::create($accesosPermiso);
        }
    }
}
