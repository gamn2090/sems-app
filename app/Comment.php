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
        $count = Comment::where('client_id','=',$id)->count();
        if($count > 0){
            $answer = Comment::where('client_id','=',$id)->first();
            return $answer->comentario;
        }
        else{
            return '-';
        }
    }
}
