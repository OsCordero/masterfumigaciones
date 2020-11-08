<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        "nombre_cliente" => $faker->name,
        "dui" => (string) rand(100000000,999999999),
        "telefono_cliente" => strval(rand(2200,2299))."-".strval(rand(1000,9999)),
        "celular_cliente" => strval(rand(6000,7999))."-".strval(rand(1000,9999)),
        "correo_cliente" => $faker->email,
        "comentarios" => "......"
    ];
});
