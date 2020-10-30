<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    public function appointments()
    {
        return $this->belongsToMany('App\Appointment');
    }
}
