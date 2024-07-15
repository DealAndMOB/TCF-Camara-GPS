<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $table = 'servicios';
    protected $fillable = [
        'tipo_servicio_id',
        'observaciones',
        'tipo',
        'fecha',
        'empresa_id',
        'estatus',
    ];

    public function tipoServicio()
    {
        return $this->belongsTo(TipoServicio::class);
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
}
