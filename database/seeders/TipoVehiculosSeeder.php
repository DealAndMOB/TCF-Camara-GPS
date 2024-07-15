<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoVehiculo;

class TipoVehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipoVehiculos = [
            [
                'nombre' => 'Furgoneta',
                'descripcion' => 'Vehículo utilitario cerrado',
                'cantidad_ruedas' => 4,
                'ejes' => 2,
                'transmision' => 'Manual',
                'estatus' => true,
            ],
            [
                'nombre' => 'Furgoneta',
                'descripcion' => 'Vehículo utilitario cerrado',
                'cantidad_ruedas' => 4,
                'ejes' => 2,
                'transmision' => 'Eléctrica',
                'estatus' => true,
            ],
            [
                'nombre' => 'Furgoneta',
                'descripcion' => 'Vehículo utilitario cerrado',
                'cantidad_ruedas' => 4,
                'ejes' => 2,
                'transmision' => 'Automática',
                'estatus' => true,
            ],
            [
                'nombre' => 'Carros',
                'descripcion' => 'Vehículos de pasajeros',
                'cantidad_ruedas' => 4,
                'ejes' => 2,
                'transmision' => 'Manual',
                'estatus' => true,
            ],
            [
                'nombre' => 'Carros',
                'descripcion' => 'Vehículos de pasajeros',
                'cantidad_ruedas' => 4,
                'ejes' => 2,
                'transmision' => 'Eléctrica',
                'estatus' => true,
            ],
            [
                'nombre' => 'Carros',
                'descripcion' => 'Vehículos de pasajeros',
                'cantidad_ruedas' => 4,
                'ejes' => 2,
                'transmision' => 'Automática',
                'estatus' => true,
            ],
            [
                'nombre' => 'Camionetas',
                'descripcion' => 'Vehículos utilitarios abiertos',
                'cantidad_ruedas' => 4,
                'ejes' => 2,
                'transmision' => 'Manual',
                'estatus' => true,
            ],
            [
                'nombre' => 'Camionetas',
                'descripcion' => 'Vehículos utilitarios abiertos',
                'cantidad_ruedas' => 4,
                'ejes' => 2,
                'transmision' => 'Eléctrica',
                'estatus' => true,
            ],
            [
                'nombre' => 'Camionetas',
                'descripcion' => 'Vehículos utilitarios abiertos',
                'cantidad_ruedas' => 4,
                'ejes' => 2,
                'transmision' => 'Automática',
                'estatus' => true,
            ],
        ];

        foreach ($tipoVehiculos as $tipoVehiculo) {
            TipoVehiculo::create($tipoVehiculo);
        }
    }
}
