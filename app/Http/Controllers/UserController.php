<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Usuario;
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
			if ($registro->user == $usuario and $registro->password == $password) {
				return view('home');
			}
			else
			{
				return redirect('/login');
			}
		}
		
	}
}
