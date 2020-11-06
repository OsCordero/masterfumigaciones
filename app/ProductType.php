<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    //
    protected $fillable = [
        'nombre_tipo_producto',
    ];
    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }
}
