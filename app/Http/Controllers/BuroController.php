<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Models\Buro;
use App\Models\Cliente;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection as Collection;


class BuroController extends Controller
{
	function viewBuro() {
		$usuarios = Cliente::whereHas('buro')->with('buro')->get();
		$usuariosnoburo = Cliente::whereDoesntHave('buro')->get();

		$registro = Usuario::where("id","=",1)->first();
        Session::put('user', $registro);

		return view('burodecredito')->with('tienen',$usuarios)->with('notienen',$usuariosnoburo);

    }
}






