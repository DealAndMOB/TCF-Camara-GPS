<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'personas';
    protected $fillable = [
        'nombre',
        'apellido_materno',
        'apellido_paterno',
        'fecha_nacimiento',
        'genero',
        'telefono',
        'domicilio_id',
        'estatus',
    ];

    public function domicilio()
    {
        return $this->belongsTo(Domicilio::class);
    }
}
