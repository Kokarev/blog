<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Car extends Model
{
    use Resizable;

    public function Owner()
    {
        return $this->belongsTo('App\Owner', 'owner', 'id');
    }


    public function carModel()
    {
        return $this->belongsTo('App\CarModel', 'car_model', 'id');
    }

    public function carFuel()
    {
        return $this->belongsTo('App\CarFuel', 'car_fuel', 'id');
    }
}
