<?php

namespace App\Http\Controllers;

use App\Models\pacientes;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $pacientes= Pacientes::all();
        return view('pacientes.index',compact('pacientes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre' => 'required|string|max:200',
            'apellido_paterno' => 'required|string|max:200',
            'apellido_materno' => 'required|string|max:200',
            'direccion' => 'required|string|max:200',
            'telefono' => 'required|string|max:200',
        ]);
        Pacientes::create($request->all());
        return redirect()->route('pacientes.index')->with('sucess','Paciente creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(pacientes $pacientes)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pacientes $paciente)
    {
        return view('pacientes.edit', compact('paciente'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pacientes $paciente)
    {
        //
        $request->validate([
            'nombre' => 'required|string|max:200',
            'apellido_paterno' => 'required|string|max:200',
            'apellido_materno' => 'required|string|max:200',
            'direccion' => 'required|string|max:200',
            'telefono' => 'required|string|max:200',
        ]);

        $paciente->update($request->all());
        return redirect()->route('pacientes.index')->with('success', 'Paciente actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pacientes $paciente)
    {
        $paciente->delete();
        return redirect()->route('pacientes.index')->with('success', 'Paciente eliminado correctamente');
    }
}
