<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccesoPermiso extends Model
{
    use HasFactory;
    protected $table = 'acceso_permisos';
    protected $fillable = [
        'tipo_usuario_id',
        'permiso_id',
        'estatus',
    ];

    public function tipoUsuario()
    {
        return $this->belongsTo(TipoUsuario::class);
    }

    public function permiso()
    {
        return $this->belongsTo(Permiso::class);
    }
}
