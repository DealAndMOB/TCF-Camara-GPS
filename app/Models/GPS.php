<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GPS extends Model
{
    use HasFactory;

    protected $table = 'gps';
    protected $fillable = ['vehiculo_id', 'latitud', 'longitud', 'velocidad', 'direccion', 'resolucion', 'estatus'];
    
    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }
}
