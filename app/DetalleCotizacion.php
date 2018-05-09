<?php namespace ControlEventos;

use Illuminate\Database\Eloquent\Model;

class DetalleCotizacion extends Model {

	//
    protected $table = 'detalle_cotizaciones';
	
	protected $fillable = ['id','cantidad','precio','inventario_id','combo_id','cotizacion_id'];
    
     public function inventario(){
        return $this->belongsTo('ControlEventos\Inventario');
        
    }
    public function combo(){
        return $this->belongsTo('ControlEventos\Combo');
        
    }
    public function cotizacion(){
        return $this->belongsTo('ControlEventos\Cotizacion');
    }
    
}
