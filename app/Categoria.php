<?php namespace ControlEventos;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

	//
    protected $table = 'categoria_ingredientes';
	
	protected $fillable = ['id','nombre'];
        
    
    public function ingredientes(){
        return $this->hasMany('ControlEventos\Ingredientes');
     }
    
}
