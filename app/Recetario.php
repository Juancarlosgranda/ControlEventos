<?php namespace ControlEventos;

use Illuminate\Database\Eloquent\Model;

class Recetario extends Model {

	protected $table = 'recetarios';
	
	protected $fillable = ['id','nombre','descripcion'];
    
    
    public function detalle_recetarios(){
        return $this->hasMany('ControlEventos\DetalleRecetario');
     }
    public function recetario_eventos(){
        return $this->hasMany('ControlEventos\RecetarioEvento');
     }
    
    
}
