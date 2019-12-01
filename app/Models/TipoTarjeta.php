<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoTarjeta extends Model
{
    public $timestamps = false;

	function tarjetas() {
		return $this->hasMany(Tarjeta::class, 'id_tipo');
	}
}
