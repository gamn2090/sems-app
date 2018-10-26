<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hotel_id',
        'fecha_entrada',
        'fecha_salida',
        'fecha_media',
        'fecha_nacimiento',
        'fecha_tripadvisor',
        'codigo_reserva',
        'codigo_cliente',
        'nombre_cliente',
        'apellido_cliente',
        'mail_cliente'
    ];

    public function getName($id)
    {
        $answer = Client::find($id);
        //dd($id);
        return $answer->nombre_cliente.' '.$answer->apellido_cliente;
    }
    public function getMail($id)
    {
        $answer = Client::find($id);
        return $answer->mail_cliente;
    }
    public function getCin($id)
    {
        $answer = Client::find($id);
        return $answer->fecha_entrada;
    }
    public function getCout($id)
    {
        $answer = Client::find($id);
        return $answer->fecha_salida;
    }
}
