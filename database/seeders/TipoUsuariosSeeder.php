<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoUsuario;

class TipoUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiposUsuarios = [
            [
                'nombre' => 'Develops',
                'descripcion' => 'Responsable de ver los logs de acceso, acceso general, el monitoreo de actividad en el sistema y la documentacion oficial del sistema',
                'estatus' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Administrador general',
                'descripcion' => 'Encargado de supervisar y coordinar las operaciones diarias de una organización. Toma decisiones estratégicas, gestiona recursos y asegura el cumplimiento de objetivos.',
                'estatus' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Jefe de flota',
                'descripcion' => 'Responsable de la gestión y mantenimiento de la flota de vehículos de una empresa. Incluye la planificación de rutas, control de gastos y supervisión de conductores.',
                'estatus' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Monitorista',
                'descripcion' => 'Encargado de la vigilancia y monitoreo de sistemas de seguridad, alarmas y cámaras de vigilancia. Reporta incidentes y asegura el cumplimiento de protocolos de seguridad.',
                'estatus' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Custodio',
                'descripcion' => 'Responsable de la protección y seguridad de bienes y personas. Realiza rondas de vigilancia, controla accesos y responde a situaciones de emergencia.',
                'estatus' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Administador general empresa',
                'descripcion' => 'Similar al Administrador general, pero enfocado específicamente en la gestión de una empresa en particular. Supervisa todas las áreas operativas y administrativas de la empresa.',
                'estatus' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Monitorista empresa',
                'descripcion' => 'Similar al Monitorista, pero centrado en las operaciones de seguridad y vigilancia dentro de una empresa específica. Asegura el monitoreo constante y la respuesta rápida a incidentes en las instalaciones de la empresa.',
                'estatus' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        TipoUsuario::insert($tiposUsuarios);
    }
}
