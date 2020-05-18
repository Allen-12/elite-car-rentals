<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarDescription extends Model
{
    protected $guarded = [];

    public function carType()
    {
        return $this->belongsTo(CarType::class);
    }

    public function booking()
    {
        return $this->hasOne(Booking::class);
    }
}
