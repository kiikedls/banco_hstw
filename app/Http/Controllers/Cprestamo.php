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
//            $registro=new Presta();
//            $registro->id=1;
//            $registro->nombre="tupu";
//            $registro->periodo=11;
            return collect(['msj'=>"prestamo aceptado"]);
        }
        else{
            return collect(['msj'=>"prestamo negado"]);
        }
//        dd($estatus);
    }
}
