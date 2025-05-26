<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use App\Models\citas;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index()
    {
        // Cargamos citas con paciente para mostrar nombre en la tabla
        $pagos = Pago::with('cita.paciente')->paginate(10);
        return view('pagos.index', compact('pagos'));
    }

    public function create()
    {
        $citas = citas::with('paciente')->get();
        return view('pagos.create', compact('citas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'monto' => 'required|numeric|min:0',
            'forma_pago' => 'required|string|max:50',
            'fecha_pago' => 'required|date',
            'id_cita' => 'required|exists:citas,id_cita',
        ]);

        Pago::create($request->all());

        return redirect()->route('pagos.index')->with('success', 'Pago registrado exitosamente.');
    }

    public function edit(Pago $pago)
    {
        $citas = citas::with('paciente')->get();
        return view('pagos.edit', compact('pago', 'citas'));
    }

    public function update(Request $request, Pago $pago)
    {
        $request->validate([
            'monto' => 'required|numeric|min:0',
            'forma_pago' => 'required|string|max:50',
            'fecha_pago' => 'required|date',
            'id_cita' => 'required|exists:citas,id_cita',
        ]);

        $pago->update($request->all());

        return redirect()->route('pagos.index')->with('success', 'Pago actualizado exitosamente.');
    }

    public function destroy(Pago $pago)
    {
        $pago->delete();
        return redirect()->route('pagos.index')->with('success', 'Pago eliminado correctamente.');
    }
}
