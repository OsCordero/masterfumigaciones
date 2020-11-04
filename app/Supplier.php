<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //Campos
    protected $fillable = [
        'nombre_proveedor','direccion_proveedor','telefono_proveedor','celular_proveedor','correo_proveedor',
        'comentarios'
    ];
}
