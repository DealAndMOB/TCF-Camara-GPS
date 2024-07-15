<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cargo;

class CargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cargos = [
            [
                'nombre' => 'Presidente',
                'descripcion' => 'Director general de la empresa',
                'responsabilidades' => 'Toma de decisiones estratégicas, supervisión de operaciones, representación legal',
                'estatus' => true,
            ],
            [
                'nombre' => 'Vicepresidente',
                'descripcion' => 'Subdirector de la empresa',
                'responsabilidades' => 'Apoyo en la toma de decisiones, supervisión de departamentos, coordinación de proyectos',
                'estatus' => true,
            ],
            [
                'nombre' => 'Gerente General',
                'descripcion' => 'Encargado de la gestión operativa',
                'responsabilidades' => 'Gestión diaria de operaciones, supervisión de equipos, implementación de políticas',
                'estatus' => true,
            ],
            [
                'nombre' => 'Jefe de Seguridad',
                'descripcion' => 'Supervisor de seguridad',
                'responsabilidades' => 'Coordinación de seguridad, supervisión de guardias, implementación de protocolos de seguridad',
                'estatus' => true,
            ],
            [
                'nombre' => 'Coordinador de Operaciones',
                'descripcion' => 'Coordinador logístico',
                'responsabilidades' => 'Planificación de rutas de custodia, asignación de recursos, monitoreo de operaciones',
                'estatus' => true,
            ],
            [
                'nombre' => 'Supervisor de Custodios',
                'descripcion' => 'Supervisor de personal',
                'responsabilidades' => 'Supervisión de guardias, evaluación de desempeño, implementación de mejoras',
                'estatus' => true,
            ],
            [
                'nombre' => 'Guardia de Seguridad',
                'descripcion' => 'Personal de seguridad',
                'responsabilidades' => 'Protección de instalaciones, monitoreo de cámaras, control de acceso, respuesta a emergencias',
                'estatus' => true,
            ],
            [
                'nombre' => 'Secretaria',
                'descripcion' => 'Asistente administrativa',
                'responsabilidades' => 'Gestión de agendas, atención telefónica, apoyo en tareas administrativas',
                'estatus' => true,
            ],
            [
                'nombre' => 'Contador',
                'descripcion' => 'Responsable de finanzas',
                'responsabilidades' => 'Gestión de cuentas, preparación de informes financieros, auditorías',
                'estatus' => true,
            ],
            [
                'nombre' => 'Reclutador',
                'descripcion' => 'Encargado de selección de personal',
                'responsabilidades' => 'Reclutamiento y selección de personal, entrevistas, contratación',
                'estatus' => true,
            ],
        ];

        foreach ($cargos as $cargo) {
            Cargo::create($cargo);
        }
    }
}
