<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignacionesVehiculo extends Model
{
    use HasFactory;
    protected $table = 'asignaciones_vehiculos';

    protected $fillable = [
        'viaje_id',
        'vehiculo_id',
        'estatus',
    ];

    public function viaje()
    {
        return $this->belongsTo(Viaje::class);
    }

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }
}
