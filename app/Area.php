<?php namespace ControlEventos;

use Illuminate\Database\Eloquent\Model;

class Area extends Model {


	
	protected $table = 'areas';
	
	protected $fillable = ['id','nombre'];
        
    
    public function detalleproveedores(){
        return $this->hasMany('ControlEventos\DetalleProveedor');
     }
    
    public function inventarios(){
        return $this->hasMany('ControlEventos\Inventario');
    }
}
