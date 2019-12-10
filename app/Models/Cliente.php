<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'nom',
        'apeP',
        'apeM',
        'f_nac',
        'CURP',
        'RFC'
    ];

    function creditos() {
        return $this->hasMany(Credito::class, 'cliente_id');
    }

    function direcciones() {
        return $this->belongsToMany(Direccion::class, 'direccion_cliente', 'cliente_id', 'direccion_id');
    }

    function prestamos() {
        return $this->hasMany(Prestamo::class,'cliente_id');
    }

    function tarjetas() {
        return $this->hasMany(Tarjeta::class, 'cliente_id');
    }

    function pagos() {
        return $this->hasManyThrough(Pago::class, Prestamo::class);
    }

    function pagos_atrasados() {
        return $this->pagos()->whereRaw('fecha < NOW()')
            ->where('fecha_pago', null);
    }

    function buro()
    {
        return $this->belongsToMany(Buro::class, 'registros_buro', 'clientes', 'buro');
    }

}
