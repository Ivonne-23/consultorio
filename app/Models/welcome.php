<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class welcome extends Model
{
    //
    protected $table = 'tratamientos';
    protected $fillable = ['nombre_tratamiento', 'descripcion', 'precio'];
    public function odontologo()
    {
        return $this->belongsTo(Odontologo::class);
    }
}
