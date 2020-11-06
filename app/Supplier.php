<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $fillable = [
        'nombre_proveedor', 
        'direccion_proveedor', 
        'telefono_proveedor',
        'celular_proveedor',
        'correo_proveedor',
        'comentarios',
    ];
    public function producttypes()
    {
        return $this->hasMany('App\ProductType');
    }
}
