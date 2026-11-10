<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">


    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h3 class="mb-0"> Registrar Paciente </h3>
            </div>

            <div class="card-body">
                <form action="{{ route('pacientes.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label"> Documento </label>
                        <input type="text" name="documento" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"> Nombres </label>
                        <input type="text" name="nombres" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"> Apellidos </label>
                        <input type="text" name="apellidos" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"> Fecha de Nacimiento </label>
                        <input type="date" name="fecha_nacimiento" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"> Teléfono </label>
                        <input type="text" name="telefono" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"> Correo Electrónico </label>
                        <input type="email" name="correo" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"> Dirección </label>
                        <input type="text" name="direccion" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"> Estado </label>
                        <select name="estado" class="form-select">
                            <option value="Activo"> Activo </option>
                            <option value="Inactivo"> Inactivo </option>
                        </select>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-success"> Guardar Paciente </button>
                        <a href="/pacientes" class="btn btn-secondary"> Volver </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>