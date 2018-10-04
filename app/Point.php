<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hotel_id',
        'servicio_id',
        'puntaje'
    ];
}
