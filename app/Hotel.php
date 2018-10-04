<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nombre',
        'Administradora'
    ];

    public function getName($id)
    {
        $answer = Hotel::find($id);
        return $answer->nombre;
    }
}
