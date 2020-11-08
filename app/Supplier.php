<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{

    //Campos
    protected $fillable = [
        'nombre_proveedor',
        'product_types_id',
        'direccion_proveedor',
        'telefono_proveedor',
        'celular_proveedor',
        'correo_proveedor',
        'comentarios',
    ];
    public function producttypes()
    {
        return $this->belongsTo('App\ProductType','product_types_id');
    }

}
