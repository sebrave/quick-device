<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DeviceUser;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(DeviceUser::class, function (Faker $faker) {

    if (mt_rand(0,1) === 1) {
        $unassigned_at = Carbon::now();
    } else {
        $unassigned_at = null;
    }

    return [
        'user_id' => factory(\App\User::class),
        'device_id' => factory(\App\Device::class),
        'unassigned_at' => $unassigned_at
    ];
});
