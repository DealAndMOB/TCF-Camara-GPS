<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    use HasFactory;
    protected $table = 'detalles';

    protected $fillable = [
        'viaje_id',
        'nombre',
        'fecha',
        'estatus',
    ];

    public function viaje()
    {
        return $this->belongsTo(Viaje::class);
    }
}
