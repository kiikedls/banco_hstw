<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoTarjeta extends Model
{
    protected $primaryKey = 'tipo';
	public $incrementing = false;
	protected $keyType = 'string';

	function tarjetas() {
		return $this->hasMany(Tarjeta::class, 'tipo');
	}
}
