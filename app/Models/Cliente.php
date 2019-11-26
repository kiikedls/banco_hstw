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
		'CURP'
	];

	function buro() {
		return $this->hasOne(Buro::class);
	}

	function creditos() {
		return $this->hasMany(Credito::class);
	}

	function direcciones() {
		return $this->belongsToMany(Direccion::class, 'cliente_direccion', 'cliente_id', 'direccion_id');
	}

	function prestamos() {
		return $this->hasMany(Prestamo::class);
	}

	function tarjetas() {
		return $this->hasMany(Tarjeta::class);
	}
}
