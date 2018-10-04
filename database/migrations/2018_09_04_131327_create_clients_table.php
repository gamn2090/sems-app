<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('hotel_id');
            $table->foreign('hotel_id')->references('id')->on('hotels');
            $table->string('fecha_entrada');
            $table->string('fecha_salida');
            $table->string('fecha_media');
            $table->string('fecha_nacimiento');
            $table->string('fecha_tripadvisor');
            $table->string('codigo_reserva');
            $table->string('codigo_cliente');
            $table->string('nombre_cliente');
            $table->string('apellido_cliente');
            $table->string('mail_cliente');
            $table->integer('enviado_mail')->default('0');
            $table->integer('recibido_encuesta')->default('0');
            $table->integer('enviado_trip')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
