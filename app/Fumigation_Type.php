<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fumigation_Type extends Model
{
    //
    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }
}
