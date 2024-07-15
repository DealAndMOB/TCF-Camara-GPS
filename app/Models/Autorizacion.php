<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autorizacion extends Model
{
    use HasFactory;
    protected $table = 'autorizaciones';
    protected $fillable = [
        'usuario_id',
        'fecha',
        'estatus',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
