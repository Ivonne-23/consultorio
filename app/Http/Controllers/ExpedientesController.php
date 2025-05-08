<?php

namespace App\Http\Controllers;

use App\Models\Expediente;
use Illuminate\Http\Request;

class ExpedientesController extends Controller
{
    public function index()
    {
        $expedientes = Expediente::paginate(10);
        return view('expedientes.index', compact('expedientes'));
    }

    public function create()
    {
        return view('expedientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_paciente' => 'required|integer',
            'id_odontologo' => 'required|integer',
            'id_cita' => 'required|integer',
            'id_tratamiento' => 'required|integer',
        ]);

        Expediente::create($request->all());

        return redirect()->route('expedientes.index')->with('success', 'Expediente creado exitosamente.');
    }

    public function edit($id)
    {
        $expediente = Expediente::findOrFail($id);
        return view('expedientes.edit', compact('expediente'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_paciente' => 'required|integer',
            'id_odontologo' => 'required|integer',
            'id_cita' => 'required|integer',
            'id_tratamiento' => 'required|integer',
        ]);

        $expediente = Expediente::findOrFail($id);
        $expediente->update($request->all());

        return redirect()->route('expedientes.index')->with('success', 'Expediente actualizado correctamente.');
    }

    public function destroy($id)
    {
        $expediente = Expediente::findOrFail($id);
        $expediente->delete();

        return redirect()->route('expedientes.index')->with('success', 'Expediente eliminado correctamente.');
    }
}
