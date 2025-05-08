<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expediente extends Model
{
    use SoftDeletes;

    protected $table = 'expedintes';
    protected $primaryKey = 'id_expediente';

    protected $fillable = [
        'id_paciente',
        'id_odontologo',
        'id_cita',
        'id_tratamiento'
    ];

    protected $dates = ['deleted_at'];
}
