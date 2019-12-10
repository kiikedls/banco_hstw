<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Models\Buro;
use App\Models\Cliente;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection as Collection;
use Dompdf\Dompdf;
use Barryvdh\DomPDF\PDF as PDF;
use Carbon\Carbon as carbon;


class BuroController extends Controller
{
	function viewBuro() {
		$usuarios = Cliente::whereHas('buro')->with('buro')->get();
		$usuariosnoburo = Cliente::whereDoesntHave('buro')->get();

		$registro = Usuario::where("id","=",1)->first();
        Session::put('user', $registro);

		return view('burodecredito')->with('tienen',$usuarios)->with('notienen',$usuariosnoburo);

    }

    public function vistapdf(Request $request){
        $fecha = carbon::now();
		$numero = $request->get('btniduser');

		dd($numero);

		//return view('reportepdf')->with('fecha', $fecha)->with('numero', $numero);

    }


    public function download(Request $request)
    {
        $numero = $request->input('numero');
        $interes = $request->input('interes');
        $fecha = $request->input('fecha');
        $camortizada = $request->input('camortizada');
        $capital = $request->input('capital');
        $cuota = $request->input('cuota');
        $html= view('viewpdf')->with('numero',$numero)->with('fecha',$fecha)->with('interes',$interes)->with('capital',$capital)->with('cuota',$cuota)->with('camortizada',$camortizada);
        $pdf = new Dompdf();
        $pdf->loadHtml($html);
        $pdf->render();
        return $pdf->stream();
    }




}






