<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
    use HasFactory;
    protected $table = 'tipo_vehiculos';
    protected $fillable = [
        'nombre',
        'descripcion',
        'cantidad_ruedas',
        'ejes',
        'estatus',
    ];
}
