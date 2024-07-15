<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $table = 'sucursales';

    protected $fillable = [
        'viaje_id',
        'nombre',
        'partida',
        'destino',
        'duracion',
        'estatus',
    ];

    public function viaje()
    {
        return $this->belongsTo(Viaje::class);
    }
}
