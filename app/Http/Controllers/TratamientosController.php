<?php

namespace App\Http\Controllers;

use App\Models\Tratamiento;
use Illuminate\Http\Request;

class TratamientosController extends Controller
{
    public function index()
    {
        $tratamientos = Tratamiento::all();
        return view('tratamientos.index', compact('tratamientos'));
    }

    public function create()
    {
        return view('tratamientos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_tratamiento' => 'required|string|max:200',
            'descripcion' => 'required|string|max:50',
            'costo' => 'required|numeric|min:0',
        ]);

        Tratamiento::create($request->all());
        return redirect()->route('tratamientos.index')->with('success', 'Tratamiento creado con éxito');
    }

    public function show(Tratamiento $tratamiento)
    {
        return view('tratamientos.show', compact('tratamiento'));
    }

    public function edit(Tratamiento $tratamiento)
    {
        return view('tratamientos.edit', compact('tratamiento'));
    }

    public function update(Request $request, Tratamiento $tratamiento)
    {
        $request->validate([
            'nombre_tratamiento' => 'required|string|max:200',
            'descripcion' => 'required|string|max:50',
            'costo' => 'required|numeric|min:0',
        ]);

        $tratamiento->update($request->all());
        return redirect()->route('tratamientos.index')->with('success', 'Tratamiento actualizado con éxito');
    }

    public function destroy(Tratamiento $tratamiento)
    {
        $tratamiento->delete();
        return redirect()->route('tratamientos.index')->with('success', 'Tratamiento eliminado con éxito');
    }
}