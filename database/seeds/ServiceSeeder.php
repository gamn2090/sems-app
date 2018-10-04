<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Service::class)->create([
            'nombre' => 'Personal',
        ]);

        factory(Service::class)->create([
            'nombre' => 'Instalaciones y servicios',
        ]);

        factory(Service::class)->create([
            'nombre' => 'Limpieza',
        ]);

        factory(Service::class)->create([
            'nombre' => 'Confort',
        ]);

        factory(Service::class)->create([
            'nombre' => 'Ubicacion',
        ]);

        factory(Service::class)->create([
            'nombre' => 'Relación Calidad-Precio',
        ]);
    }
}
