<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atleta extends Model
{
    public function registro(){
        return $this->hasMany('App\Registro');
    }
}
