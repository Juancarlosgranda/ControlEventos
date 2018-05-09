<?php namespace ControlEventos;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model {

	protected $table = 'inventarios';
	
	protected $fillable = ['id','nombre','descripcion','area_id'];
    
    
    public function detalle_cotizaciones(){
        return $this->hasMany('ControlEventos\DetalleProveedor');
     }
    
    public function detalle_eventos(){
        return $this->hasMany('ControlEventos\DetalleEvento');
    }
    public function detalle_combos(){
        return $this->hasMany('ControlEventos\DetalleCombo');
    }
    public function area(){
        return $this->belongsTo('ControlEventos\Area');
    }

    
}
