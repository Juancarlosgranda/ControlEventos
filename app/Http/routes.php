<?php
//Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');

Route::controllers([
	'validacion' => 'validacion\ValidacionController',
	'validado/areas' => 'AreaController',
	'validado/categorias' => 'CategoriaController',
	'validado/combos' => 'ComboController',
	'validado/cotizaciones' => 'CotizacionController',
	'validado/detallecombo' => 'DetalleComboController',
	'validado/detallecotizacion' => 'DetalleCotizacionController',
	'validado/detalleevento' => 'DetalleEventoController',
	'validado/detallepersonal' => 'DetallePersonalController',
	'validado/detalleproveedor' => 'DetalleProveedorController',
	'validado/detallerecetario' => 'DetalleRecetarioController',
	'validado/eventos' => 'EventoController',
	'validado/ingredientes' => 'IngredienteController',
	'validado/inventarios' => 'InventarioController',
	'validado/locales' => 'LocalController',
	'validado/presonal' => 'PersonalController',
	'validado/planos' => 'PlanoController',
	'validado/proveedores' => 'ProveedorController',
	'validado/recetarios' => 'RecetarioController',
	'validado/recetarioseventos' => 'RecetarioEventoController',
	'validado/tipopersonal' => 'TipoPersonalController',
	'validado/tiporecetario' => 'TipoRecetarioController',
	'validado/tiporusuario' => 'TipoUsuarioController',
	'validado/usuarios' => 'UsuarioController',
    'validado' => 'InicioController',
    '/' => 'BienvenidaController',
]);
