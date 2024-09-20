<?php

namespace App\Http\Controllers;

use App\Models\AccidenteLaboral;
use App\Models\Empleado;
use Illuminate\Http\Request;

class AccidenteLaboralController extends Controller
{
    public function create()
    {
        $empleados = Empleado::all();
        return view('accidentes.create', compact('empleados'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_empleado' => 'required|exists:empleados,id_empleado',
            'fecha_accidente' => 'required|date',
            'descripcion' => 'required|string|max:255',
            'causa' => 'required|string|max:255',
        ]);

        AccidenteLaboral::create($validated);

        return redirect()->route('accidentes.create')->with('success', 'Accidente laboral registrado con éxito');
    }

    
}
