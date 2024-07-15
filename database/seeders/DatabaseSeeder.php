<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            TipoUsuariosSeeder::class,
            CargosSeeder::class,
            TipoServiciosSeeder::class,
            TipoVehiculosSeeder::class,
            PermisosSeeder::class,
            EstadosSeeder::class,
            MunicipiosSeeder::class,
            AccesoPermisoSeeder::class,
            ColoniasSeeder::class,
        ]);
    }
}
