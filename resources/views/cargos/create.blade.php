@extends('layout.app')

@section('content')
<div class="container">
    <h1>Crear Nuevo Cargo</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('cargos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_empleado">Empleado</label>
            <select name="id_empleado" class="form-control" required>
                @foreach ($empleados as $empleado)
                    <option value="{{ $empleado->id_empleado }}">{{ $empleado->nombres }} {{ $empleado->apellidos }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="nombre_cargo">Nombre del Cargo</label>
            <input type="text" name="nombre_cargo" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="fecha_asignacion">Fecha de Asignación</label>
            <input type="date" name="fecha_asignacion" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cargo</button>
    </form>
</div>
@endsection
