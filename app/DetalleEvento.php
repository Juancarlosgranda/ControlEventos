<?php namespace ControlEventos;

use Illuminate\Database\Eloquent\Model;

class DetalleEvento extends Model {

	//
    protected $table = 'detalle_eventos';
	
	protected $fillable = ['id','cantidad','precio','adelanto','estado','comentario','proeevedor_id','inventario_id','evento_id'];
    
    
     public function inventario(){
        return $this->belongsTo('ControlEventos\Inventario');
        
    }
    public function evento(){
        return $this->belongsTo('ControlEventos\Evento');
    }
    public function proveedor(){
        return $this->belongsTo('ControlEventos\Proveedor');
    }
}
    