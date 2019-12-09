<?php

namespace App\Http\Controllers;

use App\Models\Tarjeta;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Tarjeta as Tarjetas;
use App\Models\TipoTarjeta as Tipo;
use Carbon\Carbon as cabron;

class CTarjeta extends Controller
{
    function vista(){
        $tp=Tipo::all();
        return view('tarjetas')->with('tp',$tp);
    }
    function asigna1(Request $r){
        $x=$r->get("tipt");
        $fecha=cabron::now();
        $fech_v=$fecha->addYear(4)->format("20y-m-d");
        $cli=Cliente::all()->where("id","=",$r->input('nocli'));
        $tarjeta="";
        for ($i=0;$i<=15;$i++){
            $tarjeta=$tarjeta.rand(0,9);
        }
        $tarjeta1 = new Tarjeta();
        $tarjeta1->numero = $tarjeta;
        $tarjeta1->fecha_vencimiento = $fech_v;
        $tarjeta1->id_tipo = $r->tipt;
        $tarjeta1->cliente_id = $r->nocli;
        $tarjeta1->save();

//        dd($x);
        return back();
    }
    function asigna2(Request $r){
        $cli=Cliente::all()->where("nom","=",$r->Name)->where("apeP","=",$r->apat)->where("apeM","=",$r->amat);
        $tarjeta="";
        $fecha=cabron::now();
        $fech_v=$fecha->addYear(4)->format("20y-m-d");

        for ($i=0;$i<=15;$i++){
            $tarjeta=$tarjeta.rand(0,9);
        }

        $tarjeta2=new Tarjeta();
        $tarjeta2->numero=$tarjeta;
        $tarjeta2->fecha_vencimiento=$fech_v;
        $tarjeta2->id_tipo=$r->tipt2;
        $tarjeta2->cliente_id=$cli[0]->id;
        $tarjeta2->save();

        return back();
    }
}
