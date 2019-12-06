<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente  as  cliente;
use App\Models\Direccion as direccion;
use Dompdf\Dompdf;
use Barryvdh\DomPDF\PDF as PDF;
use Carbon\Carbon as carbon;

class gestion extends Controller
{
    public function vista(){
        $cli = cliente::whereHas('direcciones')->with('direcciones')->get();
        return view('gestionclientes')->with('clientes',$cli);
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
        $id_c = cliente::all()->where('CURP','=', $request->CURP);
        $id_d = direccion::all()
                ->where('num_int','=', $request->num_int)
                ->where('num_ext','=', $request->num_ext)
                ->where('calle','=', $request->calle)
                ->where('calles','=', $request->calles)
                ->where('colonia','=', $request->colonia)
                ->where('ciudad','=', $request->ciudad)
                ->where('estado','=', $request->estado)
                ->where('pais','=', $request->pais)
                ->where('cp','=', $request->cp);
        foreach ($id_c as $c){
            $cli = cliente::find($c->id);
        }
        foreach ($id_d as $d){
            $cli->direcciones()->attach($d->id);
        }
        return redirect('/clientes');
    }
    public function editar(Request $request){
       $cc = cliente::whereHas('direcciones')->with('direcciones')->where('id','=',$request->id)->get();
       return view("Editar")->with('cc',$cc);
    }
    public function actualizar(Request $request){
            $cliente = cliente::find($request->id);
            $direccion= direccion::find($request->id_dir);
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
    public function eliminar(Request $request){
         $cliente = cliente::find($request->del_idc);
         $direccion = direccion::find($request->del_idd);
         $cliente->direcciones()->detach();
         $cliente->save();
         $direccion->save();
         $cliente->delete();
         $direccion->delete();
         return back();
    }
    public function calprestamo(){
            $personas = cliente::all();
            return view('calprestamo')->with('personas', $personas);
    }
    public function vistapdf(Request $request){
        $fecha = carbon::now();
        $numero = $request->ndp;
        $interes = $request->interesc;
        $años = $request->años;
        $capital = $request->capitalr/($interes * $años);
        $base =(1+$interes);
        $exponente = $años;
        $cuota = $request->capitalr/-(1-(pow($base,-$exponente))/$interes);
        if ($request->tipop == 'Quincenal'){
            $fechapago = $fecha->addDay(15)->format('d-m-20y');
        }
        elseif ($request->tipop == 'Mensual'){
            $fechapago = $fecha->addMonth(1)->format('d-m-20y');
        }
        return view('viewpdf')->with('numero', $numero)->with('interes',$interes)->with('fecha',$fechapago)->with('capital',$capital)->with('cuota',$cuota);
    }
    public function download()
    {
        $html= view('viewpdf');
        $pdf = new Dompdf();
        $pdf->loadHtml($html);
        $pdf->render();
        return $pdf->stream();
    }






}
