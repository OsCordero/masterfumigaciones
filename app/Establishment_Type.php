<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establishment_Type extends Model
{
    //
    protected $fillable = [
        'nombre_tipo_establecimiento', 
        'costo_aproximado', 
        
    ];
    public function establishments()
    {
        return $this->hasMany('App\Establishment');
    }
}
