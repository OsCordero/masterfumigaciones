<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //

    protected $fillable = [
        'codigo_fumigacion', 'fecha', 'hora','cancelado',
    ];

    public function establishment()
    {
        return $this->belongsToMany('App\Establishment');
    }
    public function fumigation_type()
    {
        return $this->belongsToMany('App\Fumigation_Type');
    }
    public function employees()
    {
        return $this->belongsToMany('App\Employee');
    }

}
