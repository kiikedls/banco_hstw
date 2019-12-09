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
        $estatus=Buro::all()->where('info_adeudor','=',$id[0]->RFC);
//        return $estatus[0]->calificacion_cliente;
        if ($estatus[0]->calificacion_cliente!=3){
            return collect(['msj'=>"prestamo aceptado"]);
        }
        else{
            return collect(['msj'=>"prestamo negado"]);
        }
//        dd($estatus);
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
}
