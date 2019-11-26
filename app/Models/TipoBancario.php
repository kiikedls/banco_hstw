<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoBancario extends Model
{
	protected $table = 'tipo_bancario';
    public $timestamps = false;

	function creditos() {
		return $this->hasMany(Credito::class, 'id_tipo');
	}
}
