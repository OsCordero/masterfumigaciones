<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //

    protected $fillable = [
        'codigo_fumigacion', 'fecha', 'hora','cancelado','fumigation_type_id','establishment_id','monto',
    ];

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
