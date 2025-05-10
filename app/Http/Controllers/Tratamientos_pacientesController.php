<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tratamientos_pacientes;
use App\Models\Tratamiento;
use App\Models\Paciente;
use App\Models\Odontologo;

class Tratamientos_pacientesController extends Controller
{
    public function index()
    {
        $asignaciones = Tratamientos_pacientes::with(['paciente', 'tratamiento', 'odontologo'])->paginate(10);
        return view('tratamientos_pacientes.index', compact('asignaciones'));
    }

    public function create()
    {
        $pacientes = Paciente::all();
        $tratamientos = Tratamiento::all();
        $odontologos = Odontologo::all();
        return view('tratamientos_pacientes.create', compact('pacientes', 'tratamientos', 'odontologos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_paciente' => 'required|integer',
            'id_tratamiento' => 'required|integer',
            'id_odontologo' => 'required|integer',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
        ]);

        Tratamientos_pacientes::create($request->all());

        return redirect()->route('tratamientos_pacientes.index')->with('success', 'Asignación creada correctamente.');
    }

    public function edit($id)
    {
        $asignacion = Tratamientos_pacientes::findOrFail($id);
        $pacientes = Paciente::all();
        $tratamientos = Tratamiento::all();
        $odontologos = Odontologo::all();
        return view('tratamientos_pacientes.edit', compact('asignacion', 'pacientes', 'tratamientos', 'odontologos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_paciente' => 'required|integer',
            'id_tratamiento' => 'required|integer',
            'id_odontologo' => 'required|integer',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
        ]);

        $asignacion = Tratamientos_pacientes::findOrFail($id);
        $asignacion->update($request->all());

        return redirect()->route('tratamientos_pacientes.index')->with('success', 'Asignación actualizada correctamente.');
    }

    public function destroy($id)
    {
        $asignacion = Tratamientos_pacientes::findOrFail($id);
        $asignacion->delete();

        return redirect()->route('tratamientos_pacientes.index')->with('success', 'Asignación eliminada correctamente.');
    }
}
