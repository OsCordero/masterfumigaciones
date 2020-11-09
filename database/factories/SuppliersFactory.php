<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Supplier;
use Faker\Generator as Faker;

$factory->define(Supplier::class, function (Faker $faker) {
    return [
        "nombre_proveedor" => $faker->company,
        "product_types_id" => rand(1,3),
        "direccion_proveedor" => $faker->address,
        "telefono_proveedor" => strval(rand(2200,2299))."-".strval(rand(1000,9999)),
        "celular_proveedor" => strval(rand(6000,7999))."-".strval(rand(1000,9999)),
        "correo_proveedor" => $faker->unique()->safeEmail,
        "comentarios" => "........."
    ];
});
