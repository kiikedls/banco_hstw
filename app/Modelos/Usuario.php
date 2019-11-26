<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	public $timestamps=false;
    protected $table = 'usuarios';
    protected $fillable = ['user','password'];
}
