<?php

namespace App\Http\Controllers;

use App\Models\Expediente;
use Illuminate\Http\Request;
use App\Models\pacientes;
use App\Models\Odontologos;
use App\Models\Citas;


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
