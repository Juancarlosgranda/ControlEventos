<?php namespace ControlEventos;

use Illuminate\Database\Eloquent\Model;

class DetalleCombo extends Model {

	//
    protected $table = 'detalle_combos';
	
	protected $fillable = ['id','cantidad','precio','inventario_id','combo_id'];
      
    public function inventario(){
        return $this->belongsTo('ControlEventos\Inventario');
        
    }
    public function combo(){
        return $this->belongsTo('ControlEventos\Combo');
    }
}
