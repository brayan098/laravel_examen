<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;
use App\Models\Empleado;

use App\Models\Contrato;

class ContratoController extends Controller
{
    public function create()
    {
        $empleados = Empleado::all();
        return view('contratos.create', compact('empleados'));
    }
    public function store(Request $request)
{
    $request->validate([
        'id_empleado' => 'required|exists:empleados,id_empleado',
        'fecha_inicio' => 'required|date',
        'tipo_contrato' => 'required|string|max:255',
        'salario' => 'required|numeric',
    ]);

    // Crear el contrato
    Contrato::create([
        'id_empleado' => $request->id_empleado,
        'fecha_inicio' => $request->fecha_inicio,
        'fecha_fin' => $request->fecha_fin,
        'tipo_contrato' => $request->tipo_contrato,
        'salario' => $request->salario,
    ]);

    return redirect()->route('contratos.create')->with('success', 'Contrato creado exitosamente');
}
}
