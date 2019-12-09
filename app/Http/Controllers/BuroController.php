<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buro;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection as Collection;


class BuroController extends Controller
{

	function viewBuro() {
	    $buro = Buro::all();
		$colecciondeburo = Collection::make($buro);
		$usuarios = Cliente::all();
		$collection = collect([]);

		foreach ($colecciondeburo as $reg)
		{
			$registros = Cliente::all()->where('RFC', '=', $reg->info_adeudor)->first();
			if ($registros !=  null) {
				$burodatos = Buro::all()->where('info_adeudor', '=', $reg->info_adeudor)->first();
				$collection->push($registros);
			}
		}

		return view('burodecredito')->with('usuarios', $usuarios)->with('buro', $colecciondeburo)->with('registros', $collection);
    }
}






