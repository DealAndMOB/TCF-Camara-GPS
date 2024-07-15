<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    use HasFactory;
    protected $table = 'domicilios'; 
    protected $fillable = ['calle', 'numero', 'estado_id', 'municipio_id', 'colonia_id', 'estatus'];

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }

    public function colonia()
    {
        return $this->belongsTo(Colonia::class);
    }
    
}

