<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Expediente extends Model
{use HasFactory, SoftDeletes;

    protected $table = 'expedientes';

    protected $fillable = [
        'id_paciente',
        'id_odontologo',
        'id_cita',
        'id_tratamiento',
    ];

    // Relacionar con otros modelos si es necesario
    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente');
    }

    public function odontologo()
    {
        return $this->belongsTo(Odontologo::class, 'id_odontologo');
    }

    public function cita()
    {
        return $this->belongsTo(Cita::class, 'id_cita');
    }

    public function tratamiento()
    {
        return $this->belongsTo(Tratamiento::class, 'id_tratamiento');
    }
}
