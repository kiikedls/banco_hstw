<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	protected $fillable = ['user', 'pass'];
	public $timestamps = false;
}
