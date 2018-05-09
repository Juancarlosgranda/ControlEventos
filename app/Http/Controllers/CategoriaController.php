<?php namespace ControlEventos\Http\Controllers;

use ControlEventos\Http\Requests;
use ControlEventos\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CategoriaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function __construct()
	{
		$this->middleware('auth');
	}

	public function getIndex()
	{  
        
        return 'Categoriaprincipal';
        
	}
    
    public function getCrearCategoria(){
        return 'crear';
         
    }
    
    public function postCrearCategoria(Request $request){
        return 'creando Categoria';
    }
    
    public function getEditarCategoria(Request $request){
       return 'editar url';
    }
    public function postEditarCategoria(Request $request){
        return 'editar post';
    }
    
    public function getEliminarCategoria(Request $request){
        return 'eliminar';
        
    }
    public function missingMethod($parameters=array()){
        abort(404);
    }


}
