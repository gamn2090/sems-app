<?php

use Illuminate\Database\Seeder;
use App\Point;

class PointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Point::class)->create([
            'hotel_id' => '1',
            'service_id' => '1',
            'client_id' => '1',
            'puntaje' => '5'
        ]);

        factory(Point::class)->create([
            'hotel_id' => '1',
            'service_id' => '2',
            'client_id' => '1',
            'puntaje' => '3'
        ]);

        factory(Point::class)->create([
            'hotel_id' => '1',
            'service_id' => '3',
            'client_id' => '1',
            'puntaje' => '4'
        ]);

        factory(Point::class)->create([
            'hotel_id' => '1',
            'service_id' => '4',
            'client_id' => '1',
            'puntaje' => '1'
        ]);

        factory(Point::class)->create([
            'hotel_id' => '1',
            'service_id' => '5',
            'client_id' => '1',
            'puntaje' => '1'
        ]);

        factory(Point::class)->create([
            'hotel_id' => '1',
            'service_id' => '6',
            'client_id' => '1',
            'puntaje' => '1'
        ]);
    }
}
