<?php
namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function create()
    {
        return view('empleado.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required|string|max:100',
            'apellidos' => 'required|string|max:100',
            'documento_identidad' => 'required|string|max:50',
            'fecha_nacimiento' => 'required|date',
            'correo' => 'required|string|email|max:100',
            'telefono' => 'required|string|max:20',
        ]);

        Empleado::create([
            'nombres' => $request->input('nombres'),
            'apellidos' => $request->input('apellidos'),
            'documento_identidad' => $request->input('documento_identidad'),
            'fecha_nacimiento' => $request->input('fecha_nacimiento'),
            'correo' => $request->input('correo'),
            'telefono' => $request->input('telefono'),
        ]);

        return redirect()->route('empleado.create')->with('success', 'Empleado guardado con éxito');
    }
    
}
