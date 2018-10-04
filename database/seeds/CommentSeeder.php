<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(Comment::class)->create([
            'hotel_id' => '1',
            'client_id' => '1',
            'comentario' => 'Bueno, pero le falto para volver a ir'
        ]);
    }
}
