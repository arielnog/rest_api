<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Movies::class, function (Faker $faker) {
    return [
        'nome' => $faker->company,
        'sinopse' => $faker->text,
        'id_diretor' => rand(1,20),
        'id_class' => rand(1,3)
    ];
});
