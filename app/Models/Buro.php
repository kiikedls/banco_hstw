<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buro extends Model
{
    protected $table = 'buro';
	protected $fillable = ['cliente_id'];
	public $timestamps = false;

	function cliente() {
		return $this->belongsTo(Cliente::class);
	}
}
