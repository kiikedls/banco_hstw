<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = 'direcciones';
    public $timestamps = false;
    protected $fillable = [
        'calle',
        'num_int',
        'num_ext',
        'calles',
        'cp',
        'colonia',
        'ciudad',
        'estado',
        'pais'
    ];

    function cliente() {
        return $this->belongsToMany(Cliente::class, 'direccion_cliente', 'direccion_id');
    }
}
