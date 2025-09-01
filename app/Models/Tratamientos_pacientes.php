<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tratamientos_pacientes extends Model
{
    use SoftDeletes;

    protected $table = 'asigna_tratamiento';
    protected $primaryKey = 'id_asignacion';

    protected $fillable = [
        'id_paciente',
        'id_tratamiento',
        'id_odontologo',
        'fecha_inicio',
        'fecha_fin'
    ];

    protected $dates = ['deleted_at'];

    // Relación opcional con otros modelos (si los tienes)
    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente');
    }

    public function tratamiento()
    {
        return $this->belongsTo(Tratamiento::class, 'id_tratamiento');
    }

    public function odontologo()
    {
        return $this->belongsTo(Odontologo::class, 'id_odontologo');
    }
}
