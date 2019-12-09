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

    function buro() {
        return $this->hasOne(Buro::class);
    }

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

    function pagos_atrasados() {
        return $this->hasManyThrough(Pago::class, Prestamo::class)
            ->whereRaw('fecha < NOW()')
            ->where('fecha_pago', null)->get();
    }
}
