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
        //
        $pacientes= pacientes::all();
        return view('Pacientes.index',compact('pacientes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Pacientes.create');
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
    public function edit(pacientes $pacientes)
    {
        //
        return view('pacientes.edit', compact('pacientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pacientes $pacientes)
    {
        //
        $request->validate([
            'nombre' => 'required|string|max:200',
            'apellido_paterno' => 'required|string|max:200',
            'apellido_materno' => 'required|string|max:200',
            'direccion' => 'required|string|max:200',
            'telefono' => 'required|string|max:200',
        ]);
        $pacientes->update($request->all());
        return redirect()->route('pacientes.index')->with('success','Paciente actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pacientes $pacientes)
    {
        //
        $pacientes->delete();
        return redirect()->route('pacientes.index')->with('success','Paciente eliminado con exito');
    }
}
