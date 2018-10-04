<?php

use Illuminate\Database\Seeder;
use App\Notification;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Notification::class)->create([
            'id' => '1',
            'type' => 'Comentario',
            'status' => '1'
        ]);
    }
}
