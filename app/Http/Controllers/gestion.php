<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente as cliente;
use App\Models\Direccion as direccion;
use App\Models\Tarjeta as tarjeta;
use App\Models\Prestamo as prestamo;
use App\Models\Credito as credito;
use App\Models\Pago as pago;
use Dompdf\Dompdf;
use Barryvdh\DomPDF\PDF as PDF;

use Carbon\Carbon as carbon;


class gestion extends Controller
{
    public function vista()
    {
        $cli = cliente::whereHas('direcciones')->with('direcciones')->get();
        return view('gestionclientes')->with('clientes', $cli);
    }

    public function agregar(Request $request)
    {
        cliente::create([
            'nom' => $request->get('nom'),
            'apeP' => $request->get('apeP'),
            'apeM' => $request->get('apeM'),
            'f_nac' => $request->get('f_nac'),
            'CURP' => $request->get('CURP'),
            'RFC' => $request->get('RFC')
        ]);
        direccion::create([
            'calle' => $request->get('calle'),
            'colonia' => $request->get('colonia'),
            'num_int' => $request->get('num_int'),
            'num_ext' => $request->get('num_ext'),
            'calles' => $request->get('calles'),
            'cp' => $request->get('cp'),
            'ciudad' => $request->get('ciudad'),
            'estado' => $request->get('estado'),
            'pais' => $request->get('pais')
        ]);
        $id_c = cliente::all()->where('CURP', '=', $request->CURP);
        $id_d = direccion::all()
            ->where('num_int', '=', $request->num_int)
            ->where('num_ext', '=', $request->num_ext)
            ->where('calle', '=', $request->calle)
            ->where('calles', '=', $request->calles)
            ->where('colonia', '=', $request->colonia)
            ->where('ciudad', '=', $request->ciudad)
            ->where('estado', '=', $request->estado)
            ->where('pais', '=', $request->pais)
            ->where('cp', '=', $request->cp);
        foreach ($id_c as $c) {
            $cli = cliente::find($c->id);
        }
        foreach ($id_d as $d) {
            $cli->direcciones()->attach($d->id);
        }
        return redirect('/clientes');
    }

    public function editar(Request $request)
    {
        $cc = cliente::whereHas('direcciones')->with('direcciones')->where('id', '=', $request->id)->get();
        return view("Editar")->with('cc', $cc);
    }

    public function actualizar(Request $request)
    {
        $cliente = cliente::find($request->id);
        $direccion = direccion::find($request->id_dir);
        $cliente->nom = $request->get('nom');
        $cliente->apeP = $request->get('apeP');
        $cliente->apeM = $request->get('apeM');
        $cliente->f_nac = $request->get('f_nac');
        $cliente->CURP = $request->get('CURP');
        $cliente->RFC = $request->get('RFC');
        $cliente->save();
        $direccion->calle = $request->calle;
        $direccion->colonia = $request->get('colonia');
        $direccion->num_int = $request->get('num_int');
        $direccion->num_ext = $request->get('num_ext');
        $direccion->calles = $request->get('calles');
        $direccion->cp = $request->get('cp');
        $direccion->ciudad = $request->get('ciudad');
        $direccion->estado = $request->get('estado');
        $direccion->pais = $request->get('pais');
        $direccion->save();
        return redirect('/clientes');
    }

    public function eliminar(Request $request)
    {
        $cliente = cliente::find($request->del_idc);
        $direccion = direccion::find($request->del_idd);
        $prestamo = prestamo::all()->where('cliente_id', '=', $request->del_idc);
        $tarjeta = tarjeta::all()->where('cliente_id', '=', $request->del_idc);
        $credito = credito::all()->where('cliente_id', '=', $request->del_idc);

        foreach ($tarjeta as $tarjet) {
            $tarj = tarjeta::find($tarjet->id);
            $tarj->save();
            $tarj->delete();
        }
        foreach ($credito as $credit) {

            $credi = credito::find($credit->id);
            $credi->save();
            $credi->delete();
        }
        foreach ($prestamo as $pre) {
            $pagos = pago::all()->where('prestamo_id', '=', $pre->id);
            foreach ($pagos as $pag) {
                $pago = pago::find($pag->id);
                $pago->save();
                $pago->delete();
            }
            $pres = prestamo::find($pre->id);
            $pres->save();
            $pres->delete();
        }
        $cliente->direcciones()->detach();
        $cliente->save();
        $direccion->save();
        $direccion->delete();
        $cliente->delete();
        return back();
    }

    public function calprestamo()
    {
        $personas = cliente::all();
        return view('calprestamo')->with('personas', $personas);
    }

    public function vistapdf(Request $request)
    {
        $fecha = carbon::now();
        $numero = $request->ndp;
        $interes = ($request->interesc) / 100;
        $años = $request->años;
        $capital = $request->capitalr;
        $cuota = $capital * (($interes * pow((1 + $interes), $años)) / (pow((1 + $interes), $años) - 1));
        $capitalfinal = $capital * (pow((1 + $interes), $años));
//        $camortizada = $capitalfinal-$cuota-$interes;
        if ($request->tipop == 'Quincenal') {
            $fechapago = $fecha->addDay(15)->format('d-m-20y');
            $camortizada = $capital / 15;
        } elseif ($request->tipop == 'Mensual') {
            $fechapago = $fecha->addMonth(1)->format('d-m-20y');
            $camortizada = $capital / 30;
        }
        return view('viewpdf')->with('numero', $numero)->with('interes', $interes)->with('fecha', $fechapago)->with('capital', $capitalfinal)->with('cuota', $cuota)->with('camortizada', $camortizada);
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


}
