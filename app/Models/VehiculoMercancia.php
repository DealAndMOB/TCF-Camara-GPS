<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiculoMercancia extends Model
{
    use HasFactory;
    protected $table = 'vehiculo_mercancias';

    protected $fillable = [
        'operador',
        'linea',
        'telefono',
        'tipo_transporte',
        'economico',
        'placa',
        'placas_caja',
        'marca',
        'matiz',
        'sellos',
        'viaje_id',
        'estatus',
    ];

    public function viaje()
    {
        return $this->belongsTo(Viaje::class);
    }
}
