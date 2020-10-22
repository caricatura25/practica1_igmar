<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'usuario_id' => $faker->numberBetween(1,10),
        'Titulo'=> $faker->title,
        'Contenido'=> $faker->paragraph,
    ];
});
