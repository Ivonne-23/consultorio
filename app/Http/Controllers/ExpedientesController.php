<?php

namespace App\Http\Controllers;

use App\Models\Expediente;
use App\Models\Odontologos;
use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Odontologo;
use App\Models\Citas;
use App\Models\Tratamiento;

class ExpedientesController extends Controller
{
    public function index()
    {

        $citas = Citas::with(['paciente', 'odontologo'])->get();

        return view('expedientes.index', compact('citas'));
    }
    public function show($id)
    {

        //return view('expediente', compact('cita'));
    }
    public function create()
    {

    }

    public function store(Request $request)
    {
    }

    public function edit(Expediente $expediente)
    {

    }

    public function update(Request $request, Expediente $expediente)
    {


    }

    public function destroy(Expediente $expediente)
    {

    }
}
