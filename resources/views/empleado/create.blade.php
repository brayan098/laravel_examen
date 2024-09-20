@extends('layout.app')

@section('content')
<body>
    <h1>Agregar Empleado</h1>

    <form action="{{ route('empleado.store') }}" method="POST">
        @csrf
        <label for="nombres">Nombres:</label>
        <input type="text" id="nombres" name="nombres" required>
        <br><br>
        
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required>
        <br><br>
        
        <label for="documento_identidad">Documento de Identidad:</label>
        <input type="text" id="documento_identidad" name="documento_identidad" required>
        <br><br>
        
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
        <br><br>
        
        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" required>
        <br><br>
        
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required>
        <br><br>
        
        <button type="submit">Guardar Empleado</button>
    </form>
</body>
</html>
@endsection