<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
    protected $fillable = ['phone_number', 'network_provider_id'];

    public function networkProvider()
    {
        return $this->belongsTo(NetworkProvider::class);
    }
}
