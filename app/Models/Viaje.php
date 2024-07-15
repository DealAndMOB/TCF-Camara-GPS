<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    use HasFactory;
    protected $table = 'viajes';
    protected $fillable = [
        'servicio_id',
        'origen',
        'destino',
        'duracion',
        'estado',
        'estatus',
    ];

    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
    }
}
