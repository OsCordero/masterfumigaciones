<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Appointment;
use App\Establishment;
use Faker\Generator as Faker;

$factory->define(Appointment::class, function (Faker $faker) {
    return [
        "codigo_fumigacion" => "abc".strval(rand(100,500)),
        "fecha" => $faker->date(),
        "hora" => $faker->time(),
        "cancelado" => rand(0,1),
        "monto" => (float) strval(rand(20,500)).".".strval(rand(0,99)),
        "fumigation_type_id" => rand(1,5),
        "establishment_id" => factory(Establishment::class)
    ];
});
