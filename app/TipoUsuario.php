<?php namespace ControlEventos;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model {

	//
    protected $table = 'tipo_usuarios';
	
	protected $fillable = ['id','nombre'];
    
    public function usuarios(){
        return $this->hasMany('ControlEventos\Usuario');
    }
}
