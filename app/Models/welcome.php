<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class welcome extends Model
{
    //
    protected $table = 'odontologos';
    protected $fillable = ['nombre',
        'apellido_paterno',
        'apellido_materno',
        'Especialidad',
        'imagen'];
    public function odontologo()
    {
        return $this->belongsTo(Odontologo::class);
    }
}
