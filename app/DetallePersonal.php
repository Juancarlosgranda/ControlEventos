<?php namespace ControlEventos;

use Illuminate\Database\Eloquent\Model;

class DetallePersonal extends Model {

	protected $table = 'detalle_personales';
	
	protected $fillable = ['id','h_inicio','h_final','pago','calificacion','comentario','num_mesa','personal_id','evento_id'];
    
    
     public function evento(){
        return $this->belongsTo('ControlEventos\Evento');
        
    }
    public function personal(){
        return $this->belongsTo('ControlEventos\Personal');
    }

}
