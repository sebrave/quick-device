<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SimCard extends Model
{
    protected $fillable = ['sim_number', 'network_provider_id'];

    public function networkProvider()
    {
        return $this->belongsTo(NetworkProvider::class);
    }
}
