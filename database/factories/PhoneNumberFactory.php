<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PhoneNumber;
use Faker\Generator as Faker;

$factory->define(PhoneNumber::class, function (Faker $faker) {
    return [
        'phone_number' => '07' . (string) mt_rand(100000000,999999999),
        'network_provider_id' => factory(\App\NetworkProvider::class)
    ];
});
