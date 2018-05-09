<?php namespace ControlEventos;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model {

	protected $table = 'personales';
	
	protected $fillable = ['id','nombre','descripcion','tipopersonal_id'];
    
    public function tipo_personal(){
        return $this->belongsTo('ControlEventos\TipoPersonal');
    }
    public function detalle_personales(){
        return $this->hasMany('ControlEventos\DetallePersonal');
     }
}
