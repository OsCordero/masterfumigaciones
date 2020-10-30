<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    public function establishments()
    {
        return $this->hasMany('App\Establishment');
    }
}
