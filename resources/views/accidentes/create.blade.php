@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Registrar Accidente Laboral</h1>

        <form action="{{ route('accidentes.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="id_empleado">Empleado</label>
                <select name="id_empleado" id="id_empleado" class="form-control" required>
                    <option value="">Seleccionar Empleado</option>
                    @foreach($empleados as $empleado)
                        <option value="{{ $empleado->id_empleado }}">{{ $empleado->nombres }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="fecha_accidente">Fecha del Accidente</label>
                <input type="date" name="fecha_accidente" id="fecha_accidente" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="causa">Causa</label>
                <input type="text" name="causa" id="causa" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
@endsection
