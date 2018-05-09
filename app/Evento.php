<?php namespace ControlEventos;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model {

	protected $table = 'eventos';
	
	protected $fillable = ['id','fecha','nombre','local_id','estado'];
        
    
    public function detalle_eventos(){
        return $this->hasMany('ControlEventos\DetalleProveedor');
     }
    
    public function detalle_personales(){
        return $this->hasMany('ControlEventos\DetallePersonal');
    }
    public function local(){
        return $this->belongsTo('ControlEventos\Local');
    }
}
