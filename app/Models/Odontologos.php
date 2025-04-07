<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Odontologos extends Model
{
    use SoftDeletes;
    protected $table = 'odontologos';
    protected $primaryKey = 'id_odontologo';
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'Especialidad'
    ];
}