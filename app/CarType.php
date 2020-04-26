<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarType extends Model
{
    public function carDescriptions()
    {
        return $this->hasMany(CarDescription::class);
    }
}
