<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{

    public function carId()
    {
        return $this->belongsTo(self::class);
    }

}
