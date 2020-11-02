<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    //
    public function establishment_type()
    {
        return $this->belongsTo('App\Establishment_Type');
    }
    public function client()
    {
        return $this->belongsTo('App\Client');
    }
    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }
}