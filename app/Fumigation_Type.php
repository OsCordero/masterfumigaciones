<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fumigation_Type extends Model
{
    //
    protected $fillable = [
        'nombre_tipo_fumigacion',
    ];
    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }
}
