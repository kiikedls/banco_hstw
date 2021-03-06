<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buro extends Model
{
    protected $table = 'buro';
	protected $fillable = [
		'id',
		'fecha',
		'compania',
		'calificacion_cliente',
		'info_adeudor'
	];
	public $timestamps = false;

	function Cliente()
    {
        return $this->belongsToMany(Cliente::class, 'registros_buro', 'buro', 'clientes');
    }

}
