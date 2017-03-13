<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    
	public $timestamps = false;
    protected $rememberTokenName = false;
    protected $fillable = ['atleta_id', 'evento_id', 'data', 'pago'];
    /*
   	public function Atleta(){
        return $this->belongsTo('App\Atleta');
    }
	*/
    public function evento(){
        return $this->belongsTo('App\Evento');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }

}
