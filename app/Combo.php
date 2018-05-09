<?php namespace ControlEventos;

use Illuminate\Database\Eloquent\Model;

class Combo extends Model {

	//
    protected $table = 'combos';
	
	protected $fillable = ['id','nombre'];
    
    public function detalleproveedores(){
        return $this->hasMany('ControlEventos\DetalleCombo');
     }
    
}
