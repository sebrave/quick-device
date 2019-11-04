<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\NetworkProvider;
use Faker\Generator as Faker;

$factory->define(NetworkProvider::class, function (Faker $faker) {
    return [
        'name' => $faker->company
    ];
});
