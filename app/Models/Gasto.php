<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    use HasFactory;
    protected $table = 'gastos';

    protected $fillable = [
        'nombre',
        'importe',
        'fecha',
        'viaje_id',
        'estatus',
    ];

    public function viaje()
    {
        return $this->belongsTo(Viaje::class);
    }
}
