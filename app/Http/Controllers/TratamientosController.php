<?php

namespace App\Http\Controllers;

use App\Models\Tratamiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TratamientosController extends Controller
{
    public function index()
    {
        $tratamientos = Tratamiento::latest()->paginate(10);
        return view('tratamientos.index', compact('tratamientos'));
    }

    public function create()
    {
        return view('tratamientos.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre_tratamiento' => 'required|string|max:200',
            'descripcion' => 'required|string|max:255',
            'costo' => 'required|numeric|min:0',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('imagenes', 'public');
            $validatedData['imagen'] = $imagenPath;
        }

        Tratamiento::create($validatedData); // Usar datos validados con ruta correcta

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
        $validatedData = $request->validate([
            'nombre_tratamiento' => 'required|string|max:200',
            'descripcion' => 'required|string|max:50',
            'costo' => 'required|numeric|min:0',
            'imagen'=> 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('imagen')) {
            if ($tratamiento->imagen) {
                Storage::disk('public')->delete($tratamiento->imagen);
            }
            $imagenPath = $request->file('imagen')->store('imagenes', 'public');
            $validatedData['imagen'] = $imagenPath;
        }

        $tratamiento->update($validatedData);

        return redirect()->route('tratamientos.index')->with('success', 'Tratamiento actualizado con éxito');
    }


    public function destroy(Tratamiento $tratamiento)
    {
        $tratamiento->delete();
        return redirect()->route('tratamientos.index')->with('success', 'Tratamiento eliminado con éxito');
    }
}
