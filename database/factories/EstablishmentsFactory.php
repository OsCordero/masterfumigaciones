<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Establishment;
use \App\Client;
use \Database\Factories\ClientsFactory;
use Faker\Generator as Faker;

$factory->define(Establishment::class, function (Faker $faker) {
    return [
        "nombre_establecimiento" => $faker->company,
        "direccion_establecimiento" => $faker->address,
        "telefono_establecimiento" => strval(rand(2200,2299))."-".strval(rand(1000,9999)),
        "client_id" => factory(Client::class),
        "establishment_type_id" => rand(1,5)
    ];
});
