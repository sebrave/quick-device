<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = [
        'type',
        'imei_number',
        'serial_number',
        'manufacturer',
        'model',
        'operating_system'
    ];
}
