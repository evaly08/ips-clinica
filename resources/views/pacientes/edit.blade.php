<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Editar Paciente</title>
</head>

<body>

    <h1>Editar Paciente</h1>

    <form action="{{ route('pacientes.update', $paciente->id) }}" method="POST">

        @csrf
        @method('PUT')

        <label>Documento:</label>
        <input type="text" name="documento" value="{{ $paciente->documento }}">

        <br><br>

        <label>Nombres:</label>
        <input type="text" name="nombres" value="{{ $paciente->nombres }}">

        <br><br>

        <label>Apellidos:</label>
        <input type="text" name="apellidos" value="{{ $paciente->apellidos }}">

        <br><br>

        <label>Fecha de nacimiento:</label>
        <input type="date" name="fecha_nacimiento" value="{{ $paciente->fecha_nacimiento }}">

        <br><br>

        <label>Teléfono:</label>
        <input type="text" name="telefono" value="{{ $paciente->telefono }}">

        <br><br>

        <label>Correo:</label>
        <input type="email" name="correo" value="{{ $paciente->correo }}">

        <br><br>

        <label>Dirección:</label>
        <input type="text" name="direccion" value="{{ $paciente->direccion }}">

        <br><br>

        <label>Estado:</label>

        <select name="estado">

            <option value="Activo">Activo</option>

            <option value="Inactivo">Inactivo</option>

        </select>

        <br><br>

        <button type="submit">
            Actualizar Paciente
        </button>

    </form>

</body>

</html>