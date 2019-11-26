<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    public $timestamps = false;

	function cliente() {
		return $this->belongsTo(Cliente::class);
	}

	function tipo() {
		return $this->belongsTo(TipoTarjeta::class, 'tipo');
	}
}
