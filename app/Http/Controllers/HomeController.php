<?php

namespace App\Http\Controllers;

use App\Models\pacientes;
use Illuminate\Http\Request;
use App\Models\Odontologos;

use App\Models\Citas;
use Carbon\Carbon;


class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $odontologos = Odontologos::count();
        $pacientes = Pacientes::count();
        $citasHoy = Citas::whereDate('fecha', now())->count();

        $proximasCitas = Citas::join('odontologos', 'odontologos.id_odontologo', '=', 'citas.id_odontologo')
            ->join('pacientes', 'pacientes.id_paciente', '=', 'citas.id_paciente')
            ->whereNull(['odontologos.deleted_at','pacientes.deleted_at'])
            ->select(
                'citas.fecha',
                'citas.hora',
                'pacientes.nombre as nombre_paciente',
                'odontologos.nombre as nombre_odontologo'
            )

            ->whereDate('citas.fecha', '>=', Carbon::today())
            ->orderBy('citas.fecha')
            ->orderBy('citas.hora')
            ->take(5)
            ->get();

        return view('home', compact('odontologos', 'pacientes', 'citasHoy', 'proximasCitas'));
    }
}
