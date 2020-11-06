<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $fillable = [
        'nombre_cliente', 'dui', 'telefono_cliente','celular_cliente','correo_cliente','comentarios',
    ];
    public function establishments()
    {
        return $this->hasMany('App\Establishment');
    }
}
