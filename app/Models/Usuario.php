<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuarios';
    protected $fillable = [
        'persona_id',
        'correo',
        'contrasenia',
        'estado',
        'tipo_usuario_id',
        'estatus',
    ];

    public function tipo_Usuario()
    {
        return $this->belongsTo(TipoUsuario::class);
    }
}
