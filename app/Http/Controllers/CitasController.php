<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use App\Models\Pacientes;
use App\Models\Odontologos;

use Illuminate\Http\Request;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citas = Citas::join('odontologos', 'odontologos.id_odontologo', '=', 'citas.id_odontologo')
            ->join('pacientes', 'pacientes.id_paciente', '=', 'citas.id_paciente')
            ->select('citas.*', 'pacientes.nombre as nombre_paciente', 'odontologos.nombre as nombre_odontologo')
            ->get();


        return view('citas.index', compact('citas'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pacientes = Pacientes::all();
        $odontologos = Odontologos::all();

        return view('citas.create', compact('pacientes', 'odontologos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'id_paciente' => 'required|exists:pacientes,id_paciente',
            'id_odontologo' => 'required|exists:odontologos,id_odontologo',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
        ]);


        Citas::create($request->all());

        return redirect()->route('citas.index')->with('success', 'Cita creada con éxito.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Citas $citas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Citas $cita)
    {
        //
        $pacientes = Pacientes::all();
        $odontologos = Odontologos::all();
        return view('citas.edit', compact('cita', 'pacientes', 'odontologos'));
    }
        /**
         * Update the specified resource in storage.
         */
        public
        function update(Request $request, Citas $cita)
        {
            $request->validate([
                'id_paciente' => 'required|exists:pacientes,id_paciente',
                'id_odontologo' => 'required|exists:odontologos,id_odontologo',
                'fecha' => 'required|date',
                'hora' => 'required|date_format:H:i',
            ]);


            $cita->update($request->all());

            return redirect()->route('citas.index')->with('success', 'Cita actualizada correctamente.');
        }

        /**
         * Remove the specified resource from storage.
         */
        public
        function destroy(citas $cita)
        {
            //
            $cita->delete();
            return redirect()->route('citas.index')->with('success', 'Cita eliminada correctamente.');
        }
    }

