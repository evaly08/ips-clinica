<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Editar Paciente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="card shadow">

            <div class="card-header bg-warning">

                <h3 class="mb-0">Editar Paciente</h3>

            </div>

            <div class="card-body">

                <form action="{{ route('pacientes.update', $paciente->id) }}"method="POST">

                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Documento</label>
                        <input type="text" name="documento" value="{{ $paciente->documento }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nombres</label>
                        <input type="text" name="nombres" value="{{ $paciente->nombres }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Apellidos</label>
                        <input type="text" name="apellidos" value="{{ $paciente->apellidos }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Fecha de Nacimiento</label>
                        <input type="date" name="fecha_nacimiento" value="{{ $paciente->fecha_nacimiento }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Teléfono</label>
                        <input type="text" name="telefono"value="{{ $paciente->telefono }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Correo Electrónico</label>
                        <input type="email" name="correo" value="{{ $paciente->correo }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Dirección</label>
                        <input type="text" name="direccion" value="{{ $paciente->direccion }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Estado</label>
                        <select name="estado" class="form-select">

                            <option value="Activo"
                                {{ $paciente->estado == 'Activo' ? 'selected' : '' }}>
                                Activo
                            </option>

                            <option value="Inactivo"
                                {{ $paciente->estado == 'Inactivo' ? 'selected' : '' }}>
                                Inactivo
                            </option>

                        </select>

                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-warning">Actualizar Paciente</button>
                        <a href="/pacientes" class="btn btn-secondary">Volver</a>
                    </div>

                </form>

            </div>

        </div>

    </div>

</body>

</html>