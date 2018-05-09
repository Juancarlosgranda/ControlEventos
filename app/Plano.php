<?php namespace ControlEventos;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model {

    protected $table = 'planos';
	
	protected $fillable = ['id','nombre','imagen'];
    
    public function locales(){
        return $this->hasMany('ControlEventos\Plano');
     }

}
