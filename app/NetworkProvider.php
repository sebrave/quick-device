<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NetworkProvider extends Model
{
    protected $fillable = ['name'];

    public function phoneNumbers()
    {
        return $this->hasMany(PhoneNumber::class);
    }

    public function simCards()
    {
        return $this->hasMany(SimCard::class);
    }
}
