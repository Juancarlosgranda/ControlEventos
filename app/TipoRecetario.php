<?php namespace ControlEventos;

use Illuminate\Database\Eloquent\Model;

class TipoRecetario extends Model {

	//
    protected $table = 'tipo_recetarios';
	
	protected $fillable = ['id','nombre'];
    
    public function recetarios(){
        return $this->hasMany('ControlEventos\Recetario');
    }
}
