<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    //
    protected $fillable = [
        'nombre_establecimiento', 
        'direccion_establecimiento',
        'telefono_establecimiento',   
    ];
    public function establishment_type()
    {
        return $this->belongsToMany('App\Establishment_Type');
    }
    public function client()
    {
        return $this->belongsToMany('App\Client');
    }
    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }
}
