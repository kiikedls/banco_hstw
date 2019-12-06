<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class CobranzaController extends Controller
{
    function viewCobranza() {
        # Clientes con pagos retrasados
        $clientes = Cliente::whereHas('prestamos', function (Builder $query) {
            $query->whereHas('pago', function (Builder $query) {
                $query->whereColumn('fecha_pago', '>', 'fecha');
            });
        })->get();

        return view('cobranza', compact('clientes'));
    }
}
