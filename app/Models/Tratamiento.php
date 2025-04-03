<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tratamiento extends Model
{
    use SoftDeletes;

    protected $table = 'tratamientos';
    protected $primaryKey = 'id_tratamiento';
    protected $fillable = [
        'nombre_tratamiento',
        'descripcion',
        'costo'
    ];
    protected $dates = ['deleted_at'];

    // Accesor para costo formateado
    public function getCostoFormateadoAttribute()
    {
        return '$' . number_format($this->costo, 2);
    }
}