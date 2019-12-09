<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class CobranzaController extends Controller
{
    function viewCobranza() {
        # Clientes con pagos retrasados
        $clientes = Cliente::whereHas('pagos_atrasados')->get();

        return view('cobranza', compact('clientes'));
    }

    function pagosAtrasados(Request $request) {
        $client_id = $request->get('id');

        $client = Cliente::find($client_id);

        return $client->pagos_atrasados()->get()
            ->sortByDesc('prestamo_id')->toJson();
    }
}
