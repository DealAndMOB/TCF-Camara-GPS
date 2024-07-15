<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $table = 'vehiculos';

    protected $fillable = [
        'matricula',
        'marca',
        'modelo',
        'matiz',
        'anio',
        'estado',
        'numero_polisa',
        'rotulacion',
        'tipo_vehiculo_id',
        'asignaciones_vehiculo_id',
        'estatus',
    ];

    public function tipoVehiculo()
    {
        return $this->belongsTo(TipoVehiculo::class);
    }

}
