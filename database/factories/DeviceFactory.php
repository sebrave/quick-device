<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Device;
use Faker\Generator as Faker;

$factory->define(Device::class, function (Faker $faker) {
    $devices = [
        ['type' => 'phone', 'manufacturer' => 'Apple', 'model' => 'iPhone 6', 'operating_system' => 'iOS'],
        ['type' => 'phone', 'manufacturer' => 'Apple', 'model' => 'iPhone 10', 'operating_system' => 'iOS'],
        ['type' => 'phone', 'manufacturer' => 'Galaxy', 'model' => 'J4+', 'operating_system' => 'Android'],
        ['type' => 'phone', 'manufacturer' => 'Huawei', 'model' => 'P10', 'operating_system' => 'Android'],
        ['type' => 'tablet', 'manufacturer' => 'Google', 'model' => 'Nexus 7', 'operating_system' => 'Android'],
        ['type' => 'tablet', 'manufacturer' => 'Apple', 'model' => 'iPad Air', 'operating_system' => 'iOS']
    ];
    $device = $devices[array_rand($devices)];

    return [
        'type' => $device['type'],
        'serial_number' => mt_rand(10000,99999) . '-' . mt_rand(10000,99999),
        'imei_number' => mt_rand(100000000000000,999999999999999),
        'manufacturer' => $device['manufacturer'],
        'model' => $device['model'],
        'operating_system' => $device['operating_system']
    ];
});
