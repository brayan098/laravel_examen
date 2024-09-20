<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;
use App\Models\Empleado;

class CargoController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_empleado' => 'required|exists:empleados,id_empleado',
            'nombre_cargo' => 'required|string|max:100',
            'fecha_asignacion' => 'required|date',
        ]);

        $cargo = Cargo::create($validatedData);

        return redirect()->back()->with('success', 'Cargo creado exitosamente.');
    }

    public function create()
    {
        $empleados = Empleado::all();
        return view('cargos.create', compact('empleados'));
    }
}
