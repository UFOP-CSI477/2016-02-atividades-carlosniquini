<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{    
    
    protected $fillable = ['name', 'preco', 'image'];

    public function compra(){
    	return $this->hasMany('App\Compra');
    }
}
