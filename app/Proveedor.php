<?php namespace ControlEventos;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model {

	protected $table = 'proveedores';
	
	protected $fillable = ['id','nombre','telefono','calificacion'];
    
    public function detalle_eventos(){
        return $this->hasMany('ControlEventos\DetalleEvento');
     }
    public function detalle_proveedpres(){
        return $this->hasMany('ControlEventos\DetalleProveedor');
     }
    
    
}
