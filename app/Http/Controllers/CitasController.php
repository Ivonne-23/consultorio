<?php

namespace App\Http\Controllers;

use App\Models\citas;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $citas=citas    ::all();
        return view('citas.index',compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('citas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:200',
            'apellido_materno' => 'required|string|max:200',
            'especialidad' => 'required|string|max:200',
        ]);
        Odontologo::create($request->all()); // Ahora Laravel reconocerá la clase

        return redirect()->route('odontologos.index')->with('success', 'Odontólogo creado con éxito.');
    }


    /**
     * Display the specified resource.
     */
    public function show(citas $citas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(citas $cita)
    {
        //
        return view('citas.edit', compact('cita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, citas $cita)
    {
        //
        $request->validate([
            'nombre_paciente' => 'required|string|max:255',
            'nombre_odontologo' => 'required|string|max:255',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
        ]);
        $cita->update($request->all());
        return redirect()->route('citas.index')->with('success', 'Cita actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(citas $cita)
    {
        //
        $cita->delete();
        return redirect()->route('citas.index')->with('success', 'Cita eliminada correctamente.');
    }
}
