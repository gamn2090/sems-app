<?php

use Illuminate\Database\Seeder;
use App\Client;
use Carbon\Carbon;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $fecha = Carbon::today()->format('d/m/Y');
        factory(Client::class)->create([
            'hotel_id' => '1',
            'fecha_entrada' => '15/09/2018',
            'fecha_salida' => '19/09/2018',
            'fecha_media' => $fecha,
            'fecha_nacimiento' => '16/09/1990',
            'fecha_tripadvisor' => '23/09/2018',
            'codigo_reserva' => '1526',
            'codigo_cliente' => '15264',
            'nombre_cliente' => 'Gustavo',
            'apellido_cliente' => 'Mattey',
            'enviado_mail' => '0',
            'recibido_encuesta' => '0',
            'enviado_trip' => '0',
            'mail_cliente' => 'gamn2090@gmail.com'
        ]);

        factory(Client::class)->create([
            'hotel_id' => '1',
            'fecha_entrada' => '15/09/2018',
            'fecha_salida' => '19/09/2018',
            'fecha_nacimiento' => '16/09/1990',
            'fecha_tripadvisor' => '23/09/2018',
            'fecha_media' => $fecha,
            'codigo_reserva' => '12121',
            'codigo_cliente' => '141423',
            'nombre_cliente' => 'Este no es Gustavo',
            'apellido_cliente' => 'Mattey',
            'enviado_mail' => '0',
            'recibido_encuesta' => '0',
            'enviado_trip' => '0',
            'mail_cliente' => 'gamn2090@gmail.com'
        ]);
    }
}
