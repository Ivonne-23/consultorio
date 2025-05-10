<?php

namespace App\Http\Controllers;

use App\Models\Odontologos;
use App\Models\pacientes;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

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
        // Validar los datos
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:200',
            'apellido_paterno' => 'required|string|max:200',
            'apellido_materno' => 'required|string|max:200',
            'Especialidad' => 'required|string|max:50',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validación para imagen
        ]);

        // Verificar si hay una imagen y guardarla
        if ($request->hasFile('imagen')) {
            // Almacenar la imagen en el directorio 'public/imagenes'
            $imagenPath = $request->file('imagen')->store('imagenes', 'public');
            // Agregar la ruta de la imagen al array de datos validados
            $validatedData['imagen'] = $imagenPath;
        }

        // Crear el odontólogo con los datos validados
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
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:200',
            'apellido_paterno' => 'required|string|max:200',
            'apellido_materno' => 'required|string|max:200',
            'Especialidad' => 'required|string|max:50',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('imagen')) {
            if ($odontologo->imagen) {
                Storage::delete('public/' . $odontologo->imagen);
            }
            $imagenPath = $request->file('imagen')->store('imagenes', 'public');
            $validatedData['imagen'] = $imagenPath;
        }
        $odontologo->update($validatedData);

        return redirect()->route('odontologos.index')->with('success', 'Odontólogo actualizado con éxito.');
    }

    public function destroy(Odontologos $odontologo)
    {
        $odontologo->delete();
        return redirect()->route('odontologos.index')->with('success', 'Odontólogo eliminado con éxito.');
    }
}
