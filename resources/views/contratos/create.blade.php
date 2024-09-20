@extends('layout.app')

@section('content')
<body>
    <h1>Crear nuevo Contrato</h1>

    <form action="{{ route('contratos.store') }}" method="POST">
        @csrf
        <label for="id_empleado">Empleado:</label>
        <select name="id_empleado" id="id_empleado">
            @foreach($empleados as $empleado)
                <option value="{{ $empleado->id_empleado }}">{{ $empleado->nombres }}</option>
            @endforeach
        </select>

        <label for="fecha_inicio">Fecha de Inicio:</label>
        <input type="date" name="fecha_inicio" id="fecha_inicio" required>

        <label for="fecha_fin">Fecha de Fin:</label>
        <input type="date" name="fecha_fin" id="fecha_fin">

        <label for="tipo_contrato">Tipo de Contrato:</label>
        <input type="text" name="tipo_contrato" id="tipo_contrato" required>

        <label for="salario">Salario:</label>
        <input type="number" name="salario" id="salario" required>

        <button type="submit">Guardar Contrato</button>
    </form>
</body>
</html>
@endsection