<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $primaryKey = 'tipo';
	public $incrementing = false;
	protected $keyType = 'string';
	protected $fillable = ['user', 'pass'];
}
