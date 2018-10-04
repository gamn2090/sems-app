<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Hotel::class, function (Faker $faker) {
    return [
        'id' => $faker->numberBetween(1,10),
        'nombre' => $faker->name,
        'Administradora' => $faker->name,
    ];
});

$factory->define(App\Notification::class, function (Faker $faker) {
    return [
        'id' => $faker->numberBetween(1,10),
        'type' => $faker->name,
        'status' => $faker->numberBetween(0,1),
    ];
});

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'hotel_id' => $faker->numberBetween(1,10),
        'email' => $faker->unique()->safeEmail,
        'username' => $faker->unique()->name,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'hotel_id' => $faker->numberBetween(1,10),
        'fecha_entrada' => $faker->text,
        'fecha_salida' => $faker->text,
        'fecha_media' => $faker->text,
        'fecha_nacimiento' => $faker->text,
        'fecha_tripadvisor' => $faker->text,
        'codigo_reserva' => $faker->text,
        'codigo_cliente' => $faker->text,
        'nombre_cliente' => $faker->name,
        'apellido_cliente' => $faker->name,
        'mail_cliente' => $faker->safeEmail,
        'enviado_mail' => $faker->numberBetween(0,1),
        'recibido_encuesta' => $faker->numberBetween(0,1),
        'enviado_trip' => $faker->numberBetween(0,1),
    ];
});


$factory->define(App\Point::class, function (Faker $faker) {
    return [
        'hotel_id' => $faker->numberBetween(1,10),
        'service_id' => $faker->numberBetween(1,15),
        'client_id' => $faker->numberBetween(1,1000),
        'puntaje' => $faker->numberBetween(1,5)
    ];
});

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'hotel_id' => $faker->numberBetween(1,10),
        'comentario' => $faker->text,
        'client_id' => $faker->numberBetween(1,1000)
    ];
});

$factory->define(App\Service::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
    ];
});
