<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Ators::class, function (Faker $faker) {
    return [
        'nome_a'=>$faker->name
    ];
});
