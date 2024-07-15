<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;
    protected $table = 'trabajadores';
    protected $fillable = [
        'persona_id',
        'NSS',
        'tipoContrato',
        'RFC',
        'fechaContratacion',
        'cargo_id',
        'estatus',
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }

    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }
}
