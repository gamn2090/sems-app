<?php

use Illuminate\Database\Seeder;
use App\Hotel;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Hotel::class)->create([
            'id' => '1',
            'nombre' => 'San Agustín Exclusive',
            'Administradora' => 'Estefany Lujan'
        ]);

        factory(Hotel::class)->create([
            'id' => '2',
            'nombre' => 'San Agustín Riviera',
            'Administradora' => 'Liz Lizarraga'
        ]);

        factory(Hotel::class)->create([
            'id' => '3',
            'nombre' => 'San Agustín Paracas',
            'Administradora' => 'Margary Aguilar'
        ]);

        factory(Hotel::class)->create([
            'id' => '4',
            'nombre' => 'San Agustín Recoleta',
            'Administradora' => 'Nelida Vallenas'
        ]);

        factory(Hotel::class)->create([
            'id' => '5',
            'nombre' => 'San Agustín Urubamba',
            'Administradora' => 'Tania Benavente'
        ]);

        factory(Hotel::class)->create([
            'id' => '6',
            'nombre' => 'San Agustín Plaza',
            'Administradora' => 'María Teresa Cuadros'
        ]);

        factory(Hotel::class)->create([
            'id' => '7',
            'nombre' => 'San Agustín El Dorado',
            'Administradora' => 'Rosario Bermedo'
        ]);

        factory(Hotel::class)->create([
            'id' => '8',
            'nombre' => 'San Agustín Internacion',
            'Administradora' => 'Johanna Caceres'
        ]);

        factory(Hotel::class)->create([
            'id' => '9',
            'nombre' => 'San Agustín Posada del Monasterio',
            'Administradora' => 'Lady Ninantay'
        ]);

        factory(Hotel::class)->create([
            'id' => '10',
            'nombre' => 'Administrador',
            'Administradora' => 'Gustavo Mattey'
        ]);
    }
}
