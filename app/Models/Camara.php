<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camara extends Model
{
    use HasFactory;
    protected $table = 'camaras';
    protected $fillable = ['folio', 'marca', 'modelo', 'tipo_camara', 'resolucion', 'conectividad', 'precio', 'descripcion', 'token', 'vehiculo_id', 'estatus'];

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }
}
