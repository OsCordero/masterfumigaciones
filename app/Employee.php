<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = [
        'nombre_empleado',
        'puesto_empleado', 
        'telefono_empleado',
        'correo_empleado',
        'direccion_empleado',
    ];
    public function appointments()
    {
        return $this->belongsToMany('App\Appointment');
    }
}
