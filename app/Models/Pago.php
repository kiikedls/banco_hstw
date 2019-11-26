<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    public $timestamps = false;

	function prestamo() {
		return $this->hasOne(Pago::class);
	}
}
