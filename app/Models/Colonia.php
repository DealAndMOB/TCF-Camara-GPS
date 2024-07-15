<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colonia extends Model
{
    use HasFactory;
    protected $table = 'colonias';
    protected $fillable = ['nombre','codigo_postal', 'municipio_id','estatus'];

    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }
    
}
