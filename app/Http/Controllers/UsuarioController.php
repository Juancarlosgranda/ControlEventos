<?php namespace ControlEventos\Http\Controllers;

use ControlEventos\Http\Requests;
use ControlEventos\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UsuarioController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	
	public function getIndex()
	{  
        
        return 'Areaprincipal';
        
	}
    
    public function getCrearArea(){
        return 'crear';
         
    }
    
    public function postCrearArea(Request $request){
        return 'creando area';
    }
    
    public function getEditarArea(Request $request){
       return 'editar url';
    }
    public function postEditarArea(Request $request){
        return 'editar post';
    }
    
    public function getEliminarArea(Request $request){
        return 'eliminar';
        
    }
    public function missingMethod($parameters=array()){
        abort(404);
    }

}
