<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $table = 'empresas';
    protected $fillable = [
        'usuario_id',
        'nombre',
        'descripcion',
        'sitioweb',
        'giro',
        'sector',
        'telefono',
        'correo',
        'domicilio_id',
        'estatus',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function domicilio()
    {
        return $this->belongsTo(Domicilio::class);
    }
}
