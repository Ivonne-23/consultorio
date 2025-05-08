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
        'fecha_pago'
    ];

    protected $dates = ['deleted_at'];

    public function getMontoFormateadoAttribute()
    {
        return '$' . number_format($this->monto, 2);
    }
}
