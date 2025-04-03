<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class citas extends Model
{
    //
    use softDeletes;
    protected $table = 'citas';
    protected $primaryKey = 'id_cita';
    public $timestamps = false;
    protected $fillable = ['nombre_paciente',
        'nombre_odondologo',
        'fecha',
        'hora'];

}
