<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Registro;

class Evento extends Model
{
    //public $timestamps = false;

    //protected $fillable = ['nome', 'preco', 'data'];

    //protected $fillable = ['nome', 'preco', 'data'];

    public function registro(){
    	return $this->hasMany('App\Registro');
  	}

}
