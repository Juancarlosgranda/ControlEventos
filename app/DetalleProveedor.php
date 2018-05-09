<?php namespace ControlEventos;

use Illuminate\Database\Eloquent\Model;

class DetalleProveedor extends Model {

	protected $table = 'detalle_proveedores';
	
	protected $fillable = ['id','area_id','proveedor_id'];
    
     public function area(){
        return $this->belongsTo('ControlEventos\Area');
        
    }
    public function proveedor(){
        return $this->belongsTo('ControlEventos\Proveedor');
    }

}
