<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    public $timestamps = false;

	function pago() {
		return $this->hasMany(Pago::class);
	}

	function cliente() {
		return $this->belongsTo(Cliente::class);
	}
}
