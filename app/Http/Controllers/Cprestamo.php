<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Prestamo as Presta;
use App\Models\Buro;

class Cprestamo extends Controller
{
    function verifica_buro(Request $r){
//        $id=Cliente::all()->where('id','=',$r->idcli);
        $id=Cliente::all()->where('id','=',$r->idcli);
        $estatus=Buro::all()->where('identificador','=',$id[0]->RFC);
//        return $estatus[0]->calificacion_cliente;
        if ($estatus[0]->calificacion_cliente!=3){
            return collect(['msj'=>"prestamo aceptado"]);
        }
        else{
            return collect(['msj'=>"prestamo negado"]);
        }
//        dd($estatus);
    }
    function verifica_buro2(Request $r){
        $id=Cliente::all()->where('nom','=',$r->cli);
//        $id=Cliente::all()->where('id','=',$r->idcli);
        $estatus=Buro::all()->where('identificador','=',$id[1]->RFC);
//        return $estatus[0]->calificacion_cliente;
        if ($estatus[1]->calificacion_cliente!=3){
            return collect(['msj'=>"prestamo aceptado"]);
        }
        else{
            return collect(['msj'=>"prestamo negado"]);
        }
//        dd($estatus);
//        return $estatus;
    }
    function prestar(Request $r){
        $registro=new Presta();
        $registro->nombre=$r->concepto;
        $registro->periodo=$r->periodo;
        $registro->tipo=$r->tipp;
        $registro->monto=$r->monto;
        $registro->cliente_id=$r->Num;
        $registro->save();

        return back();
//        return $r;
    }
    function prestados(Request $r){
        $idcli=Cliente::all()->where("nom","=",$r->Name)->where("apeP","=",$r->apat)->where("apeM","=",$r->amat);

        $registro=new Presta();
        $registro->nombre=$r->concepto;
        $registro->periodo=$r->periodo;
        $registro->tipo=$r->tipp;
        $registro->monto=$r->monto;
        $registro->cliente_id=$idcli[0]->id;
        $registro->save();
        return back();
    }
}
