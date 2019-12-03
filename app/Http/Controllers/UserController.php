<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Session;

class UserController extends Controller
{
	function iniciarsesion(Request $r)
	{
		$this->validate(request(),
			[
				'User' => 'required|string',
				'Pass' => 'required|string'
			]);
		// session_start();
		// Aqui estoy recuperando los datos del formulario, de los input
		$usuario = $r->input("User");
		$password = $r->input("Pass");

		// Aqui recupero todo los usuarios de la tabla usuarios
		$userdb = Usuario::all();
		$cantidad = $userdb->count();
		
		for ($i=1; $i <= $cantidad; $i++) {
			$registro = Usuario::where("id","=",$i)->first();
			if ($registro->user == $usuario and $registro->pass == $password) {
				return view('home');
			}
			else
			{
				return redirect('/login');
			}
		}
		
	}

	function cerrarsesion()
	{
		return view('login');
	}

	function buscar(Request $r)
	{
		// $texto=$r->get('consulta');
		// return $texto;
		// $cliente = Usuario::where("RFC","=",);
		$datos = $r->get('consulta');

		


		return $datos;
	}
	
}
