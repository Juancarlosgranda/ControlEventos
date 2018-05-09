<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use ControlEventos\TipoUsuario;
use ControlEventos\Usuario;
use ControlEventos\Area;
use ControlEventos\Inventario;
use ControlEventos\Proveedor;
use ControlEventos\Cotizacion;
use ControlEventos\Evento;
use ControlEventos\Categoria;
use ControlEventos\Ingrediente;
use ControlEventos\Combo;
use ControlEventos\Local;
use ControlEventos\Plano;
use ControlEventos\TipoPersonal;
use ControlEventos\TipoRecetario;
use ControlEventos\Recetario;
use ControlEventos\Personal;


class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        
        TipoUsuario::truncate();
        Usuario::truncate();
        Area::truncate();
        Inventario::truncate();
        Proveedor::truncate();
        Cotizacion::truncate();
        Evento::truncate();
        Categoria::truncate();
        Ingrediente::truncate();
        Combo::truncate();
        Local::truncate();
        Plano::truncate();
        TipoPersonal::truncate();
        TipoRecetario::truncate();
        Recetario::truncate();        
        Personal::truncate();        
        
        $this->call('TipoUsuarioSeeder');
        $this->call('UsuarioSeeder');
        $this->call('AreaSeeder');
        $this->call('InventarioSeeder');
        $this->call('ProveedorSeeder');
        $this->call('CotizacionSeeder');
        $this->call('EventoSeeder');
        $this->call('CategoriaSeeder');
        $this->call('IngredienteSeeder');
        $this->call('ComboSeeder');
        $this->call('PlanoSeeder');
        $this->call('LocalSeeder');
        $this->call('TipoRecetarioSeeder');
        $this->call('RecetarioSeeder');
        $this->call('TipoPersonalSeeder');
        $this->call('PersonalSeeder');
	}

}
