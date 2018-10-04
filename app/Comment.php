<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hotel_id',
        'client_id',
        'comment'
    ];

    public function getComment($id)
    {
        $answer = Comment::where('client_id','=',$id)->first();
        return $answer->comentario;
    }
}
