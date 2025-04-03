<?php

namespace App\Http\Controllers;

use App\Models\Odontologos;
use Illuminate\Http\Request;

class OdontologosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       $odontologos= Odontologos::all();
        return view('Odontologos.index',compact('odontologos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Odontologos.create');
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
            'especialidad' => 'required|string|max:200',
        ]);

        // Crear nuevo odontólogo
        Odontologo::create($request->all());

        return redirect()->route('odontologos.index')->with('success', 'Odontólogo creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Odontologos $odontologos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Odontologos $odontologo)
    {

         return view('odontologos.edit', compact('odontologo'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Odontologos $odontologo)
    {
        //
        $request->validate([
            'nombre' => 'required|string|max:200',
            'apellido_paterno' => 'required|string|max:200',
            'apellido_materno' => 'required|string|max:200',
            'especialidad' => 'required|string|max:200',
        ]);

        // Actualizar odontólogo
        $odontologo->update($request->all());

        return redirect()->route('odontologos.index')->with('success', 'Odontólogo actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Odontologos $odontologo)
    {
        $odontologo->delete();
        return redirect()->route('odontologos.index')->with('success', 'Odontólogo eliminado con éxito.');
    }

}
