<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Cliente;
use App\Models\Prestamo;
use DB;
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
		if ($cantidad == 0) {
			return view('login');
		}
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
		$consulta=$r->get('consulta');

		$resultado=DB::table('clientes')
						->join('prestamos', 'clientes.id','=','prestamos.cliente_id')
						->join('pagos','prestamos.id','=','pagos.prestamo_id')
						->select('clientes.nom','prestamos.periodo','prestamos.tipo','prestamos.monto','pagos.pagos','pagos.fecha','pagos.cuota','pagos.interes','pagos.c_amortizacion','pagos.c_final')
						->where('clientes.RFC','=',$consulta)
						->get();

		return $resultado;
	}
	
}
