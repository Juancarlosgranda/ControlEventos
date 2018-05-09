<?php namespace ControlEventos;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model {

	protected $table = 'ingredientes';
	
	protected $fillable = ['id','nombre'];

    public function detalleRecetarios(){
        return $this->hasMany('ControlEventos\DetalleRecetario');
     }
    
}
