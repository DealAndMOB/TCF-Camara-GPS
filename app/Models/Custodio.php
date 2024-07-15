<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custodio extends Model
{
    use HasFactory;
    protected $table = 'custodios';

    protected $fillable = [
        'trabajador_id',
        'licencia',
        'arma',
        'vehiculo_id',
        'servicio_id',
        'servicio_programado_id',
        'estatus',
    ];

    public function trabajador()
    {
        return $this->belongsTo(Trabajador::class);
    }

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
    }

    public function servicioProgramado()
    {
        // return $this->belongsTo(ServicioProgramado::class);
    }
}
