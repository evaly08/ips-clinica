<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Pacientes - IPS Clínica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow">

            <div class="card-header bg-primary text-white">
                <h3 class="mb-0"> Sistema IPS Clínica - Gestión de Pacientes </h3>
            </div>


            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>Listado de Pacientes</h4>
                    <a href="/pacientes/create" class="btn btn-success">Nuevo Paciente</a>
                </div>
            </div>

            <table class="table table-striped table-hover table-bordered">
                <thead class="table-dark">
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
                        <td>
                            @if ($paciente->estado == 'Activo')
                            <span class="badge bg-success"> Activo </span>

                            @else
                            <span class="badge bg-danger"> Inactivo </span>

                            @endif
                        </td>


                        <td>
                            <a href="/pacientes/{{ $paciente->id }}/edit" class="btn btn-warning btn-sm"> Editar </a>
                        
                            <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Está seguro de eliminar este paciente?')">
                                @csrf
                                @method('DELETE')

                             <button type="submit" class="btn btn-danger btn-sm"> Eliminar </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>