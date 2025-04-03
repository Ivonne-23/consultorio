<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pacientes extends Model
{
    use softDeletes;

    protected $table = 'pacientes';
    protected $primaryKey = 'id_paciente';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'direccion',
        'telefono'
    ];
}
