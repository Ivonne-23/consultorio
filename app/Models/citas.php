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
        'nombre_paciente',
        'nombre_odontologo', // Corregido: elimina la 'd' extra
        'fecha',
        'hora'
    ];
    
    // Cambiado a true ya que tu tabla sí tiene estos campos
    public $timestamps = true;
    
    // Si quieres formato personalizado para las fechas
    protected $casts = [
        'fecha' => 'date:Y-m-d',
        'hora' => 'datetime:H:i'
    ];
}