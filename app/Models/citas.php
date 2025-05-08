<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class citas extends Model
{
    use SoftDeletes;

    protected $table = 'citas';
    protected $primaryKey = 'id_cita';

    protected $fillable = [
        'id_paciente',
        'id_odontologo',
        'fecha',
        'hora',
    ];

    public function paciente()
    {
        return $this->belongsTo(Pacientes::class, 'id_paciente');
    }

    public function odontologo()
    {
        return $this->belongsTo(Odontologos::class, 'id_odontologo');
    }
}
