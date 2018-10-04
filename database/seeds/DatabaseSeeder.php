<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HotelSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PointSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(NotificationSeeder::class);
    }
}
