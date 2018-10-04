<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Gustavo Mattey',
            'email' => 'Desarrollo@hsaperu.com',
            'hotel_id' => '10',
            'username' => 'Gamn2090',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        ]);

        factory(User::class)->create([
            'name' => 'HSA Exclusive',
            'email' => 'exclusive@hsaperu.com',
            'hotel_id' => '1',
            'username' => 'Exclusive',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        ]);
    }
}
