<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
    public function establishment()
    {
        return $this->belongsTo('App\Establishment');
    }
    public function fumigation_type()
    {
        return $this->belongsTo('App\Fumigation_Type');
    }
    public function employees()
    {
        return $this->belongsToMany('App\Employee');
    }

}
