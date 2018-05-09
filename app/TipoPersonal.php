<?php namespace ControlEventos;

use Illuminate\Database\Eloquent\Model;

class TipoPersonal extends Model {

	protected $table = 'tipo_personales';
	
	protected $fillable = ['id','nombre'];
    
     public function personales(){
        return $this->hasMany('ControlEventos\Personal');
    }
    

}
