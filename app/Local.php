<?php namespace ControlEventos;

use Illuminate\Database\Eloquent\Model;

class Local extends Model {

	protected $table = 'locales';
	
	protected $fillable = ['id','nombre','plano_id'];
    
    
      public function plano(){
        return $this->belongsTo('ControlEventos\Plano');
    }
    public function eventos(){
        return $this->hasMany('ControlEventos\Evento');
    }
}
