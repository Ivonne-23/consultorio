<?php

namespace App\Http\Controllers;

use App\Models\Odontologos;
use Illuminate\Http\Request;

class OdontologosController extends Controller
{
    public function index()
    {
        $odontologos = Odontologos::all();
        return view('odontologos.index', compact('odontologos'));
    }

    public function create()
    {
        return view('odontologos.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:200',
            'apellido_paterno' => 'required|string|max:200',
            'apellido_materno' => 'required|string|max:200',
            'Especialidad' => 'required|string|max:50',
        ]);
        
        Odontologos::create($validatedData);
        return redirect()->route('odontologos.index')->with('success', 'Odontólogo creado con éxito.');
    }

    public function show(Odontologos $odontologos)
    {
        return view('odontologos.show', compact('odontologos'));
    }

    public function edit(Odontologos $odontologo)
    {
        return view('odontologos.edit', compact('odontologo'));
    }

    public function update(Request $request, Odontologos $odontologo)
    {
        $request->validate([
            'nombre' => 'required|string|max:200',
            'apellido_paterno' => 'required|string|max:200',
            'apellido_materno' => 'required|string|max:200',
            'Especialidad' => 'required|string|max:50',
        ]);

        $odontologo->update($request->all());
        return redirect()->route('odontologos.index')->with('success', 'Odontólogo actualizado con éxito.');
    }

    public function destroy(Odontologos $odontologo)
    {
        $odontologo->delete();
        return redirect()->route('odontologos.index')->with('success', 'Odontólogo eliminado con éxito.');
    }
}