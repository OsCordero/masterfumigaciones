<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establishment_Type extends Model
{
    //
    public function establishments()
    {
        return $this->hasMany('App\Establishment');
    }
}
