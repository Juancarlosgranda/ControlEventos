<?php namespace ControlEventos;

use Illuminate\Database\Eloquent\Model;

class DetalleRecetario extends Model {

    
    protected $table = 'detalle_recetario';
	
	protected $fillable = ['id_detalle_rece','precio','cantidad','receta_id','ingredientes_id'];
        
    
     public function ingrediente(){
        return $this->belongsTo('ControlEventos\Ingrediente');
        
    }
    public function receta(){
        return $this->belongsTo('ControlEventos\Recetario');
    }

}
