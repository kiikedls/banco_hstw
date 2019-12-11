<?php

namespace App\Http\Controllers;

use function MongoDB\BSON\toJSON;
use Session;
use Illuminate\Http\Request;
use App\Models\Buro as buro;
use App\Models\Cliente;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection as Collection;
use Dompdf\Dompdf;
//use Barryvdh\DomPDF\PDF as PDF;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon as carbon;


class BuroController extends Controller
{
    function viewBuro()
    {
        $usuarios = Cliente::whereHas('buro')->with('buro')->get();
        $usuariosnoburo = Cliente::whereDoesntHave('buro')->get();

        $registro = Usuario::where("id", "=", 1)->first();
        Session::put('user', $registro);

        return view('burodecredito')->with('tienen', $usuarios)->with('notienen', $usuariosnoburo);

    }

    public function vistapdf(Request $request)
    {
        $fecha = carbon::now();
        $numero = $request->get('btniduser');
        $usuarios = Cliente::whereHas('buro')->where("id", "=", $numero)->with('buro')->get()->first();

        return view('reportepdf')->with('fecha', $fecha)->with('usuario', $usuarios);
    }


    public function download(Request $request)
    {
        $numero = $request->input('numero');
        $interes = $request->input('interes');
        $fecha = $request->input('fecha');
        $camortizada = $request->input('camortizada');
        $capital = $request->input('capital');
        $cuota = $request->input('cuota');
        $html = view('viewpdf')->with('numero', $numero)->with('fecha', $fecha)->with('interes', $interes)->with('capital', $capital)->with('cuota', $cuota)->with('camortizada', $camortizada);
        $pdf = new Dompdf();
        $pdf->loadHtml($html);
        $pdf->render();
        return $pdf->stream();
    }

    public function pdf(Request $request)
    {
        $personas = Cliente::whereHas('direcciones')->with('direcciones')->whereHas('buro')->with('buro')->where('id', '=', $request->id)->get();
        $invoice = "2222";
        $mensaje = $request->mensaje;
        $data = ['personas' => $personas, 'mensaje' => $mensaje];
        $pdf = PDF::loadView('PDF', $data);
        return base64_encode($pdf->stream('invoice.pdf'));
    }


}






