<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pago extends Model
{
    use SoftDeletes;

    protected $table = 'pago';
    protected $primaryKey = 'id_pago';

    protected $fillable = [
        'monto',
        'forma_pago',
        'fecha_pago',
        'id_cita',
    ];

    protected $dates = ['deleted_at'];

    public function cita()
    {
        // Aquí importa correctamente el modelo citas.php
        return $this->belongsTo(citas::class, 'id_cita', 'id_cita');
    }

    public function getMontoFormateadoAttribute()
    {
        return '$' . number_format($this->monto, 2);
    }
}
