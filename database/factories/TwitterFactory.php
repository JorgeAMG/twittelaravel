<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Twitter;
use Faker\Generator as Faker;

$factory->define(Twitter::class, function (Faker $faker) {
    return [
        //
        "titulo" => $faker->jobTitle,
        "contenido" => $faker->sentence,
        "usuario_id" => $faker->randomDigitNotNull,
    ];
});
