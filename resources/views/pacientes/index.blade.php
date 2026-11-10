<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Pacientes</title>
</head>

<body>

    <h1>Listado de Pacientes</h1>

<a href="/pacientes/create">
    Nuevo Paciente
</a>

<br><br>

<table border="1">

    <thead>

        <tr>
            <th>ID</th>
            <th>Documento</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Fecha Nacimiento</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Dirección</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>

    </thead>

    <tbody>

        @foreach ($pacientes as $paciente)

        <tr>

            <td>{{ $paciente->id }}</td>
            <td>{{ $paciente->documento }}</td>
            <td>{{ $paciente->nombres }}</td>
            <td>{{ $paciente->apellidos }}</td>
            <td>{{ $paciente->fecha_nacimiento }}</td>
            <td>{{ $paciente->telefono }}</td>
            <td>{{ $paciente->correo }}</td>
            <td>{{ $paciente->direccion }}</td>
            <td>{{ $paciente->estado }}</td>

            <td>

                <a href="/pacientes/{{ $paciente->id }}/edit">
                    Editar
                </a>

                <form
                    action="{{ route('pacientes.destroy', $paciente->id) }}"
                    method="POST"
                    onsubmit="return confirm('¿Está seguro de eliminar este paciente?')"
                >

                    @csrf
                    @method('DELETE')

                    <button type="submit">
                        Eliminar
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

</body>

</html>