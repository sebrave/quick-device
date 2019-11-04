<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SimCard;
use App\NetworkProvider;
use Faker\Generator as Faker;

$factory->define(SimCard::class, function (Faker $faker) {
    return [
        'sim_number' => mt_rand(1000000,9999999),
        'network_provider_id' => factory(\App\NetworkProvider::class)
    ];
});
