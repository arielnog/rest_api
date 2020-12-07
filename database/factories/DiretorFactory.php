<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Diretor::class, function (Faker $faker) {
    return [
        'nome_d'=>$faker->name
    ];
});
