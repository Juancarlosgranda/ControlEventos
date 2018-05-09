<?php namespace ControlEventos;

use Illuminate\Database\Eloquent\Model;

class RecetarioEvento extends Model {

	protected $table = 'recetario_evento';
	
	protected $fillable = ['id_recetario_evento','recetario_id','evento_id','precio','estado'];
    
    
     public function recetario(){
        return $this->belongsTo('ControlEventos\Recetario');
    }
    public function evento(){
        return $this->belongsTo('ControlEventos\Evento');
    }
    
    
}
