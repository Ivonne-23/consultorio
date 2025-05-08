<?php

namespace App\Http\Controllers;

use App\Models\Expediente;
use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Odontologo;
use App\Models\Cita;
use App\Models\Tratamiento;

class ExpedientesController extends Controller
{
    public function index()
    {
        $expedientes = Expediente::with('paciente', 'odontologo', 'cita', 'tratamiento')->get();
        $pacientes = Paciente::all(); // Cargar los pacientes para usarlos en la vista

        return view('expedientes.index', compact('expedientes', 'pacientes'));
    }

    public function create()
    {
        $pacientes = Paciente::all();
        $odontologos = Odontologo::all();
        $citas = Cita::all();
        $tratamientos = Tratamiento::all();

        return view('expedientes.create', compact('pacientes', 'odontologos', 'citas', 'tratamientos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_paciente' => 'nullable|exists:pacientes,id',
            'id_odontologo' => 'nullable|exists:odontologos,id',
            'id_cita' => 'nullable|exists:citas,id',
            'id_tratamiento' => 'nullable|exists:tratamientos,id',
        ]);

        Expediente::create($request->all());
        return redirect()->route('expedientes.index')->with('success', 'Expediente creado exitosamente.');
    }

    public function edit(Expediente $expediente)
    {
        $pacientes = Paciente::all();
        $odontologos = Odontologo::all();
        $citas = Cita::all();
        $tratamientos = Tratamiento::all();
        return view('expedientes.edit', compact('expediente', 'pacientes', 'odontologos', 'citas', 'tratamientos'));
    }

    public function update(Request $request, Expediente $expediente)
    {
        $request->validate([
            'id_paciente' => 'nullable|exists:pacientes,id',
            'id_odontologo' => 'nullable|exists:odontologos,id',
            'id_cita' => 'nullable|exists:citas,id',
            'id_tratamiento' => 'nullable|exists:tratamientos,id',
        ]);

        $expediente->update($request->all());
        return redirect()->route('expedientes.index')->with('success', 'Expediente actualizado exitosamente.');
    }

    public function destroy(Expediente $expediente)
    {
        $expediente->delete();
        return redirect()->route('expedientes.index')->with('success', 'Expediente eliminado exitosamente.');
    }
}
