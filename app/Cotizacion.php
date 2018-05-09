<?php namespace ControlEventos;

use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model {

    protected $table = 'cotizaciones';
	
	protected $fillable = ['id','nombre','fecha'];
    
    public function detallecotizaciones(){
        return $this->hasMany('ControlEventos\DetalleCotizacion');
     }
    
}
