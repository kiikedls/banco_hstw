<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
    public $timestamps = false;

	function cliente() {
		return $this->belongsTo(Cliente::class);
	}

	function tipo() {
		return $this->belongsTo(TipoBancario::class, 'id_tipo');
	}
}
