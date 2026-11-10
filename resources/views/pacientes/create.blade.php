<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Paciente</title>
</head>
<body>

    <h1>Registrar Paciente</h1>

    <form action="{{ route('pacientes.store') }}" method="POST">
        
        @csrf 
        
        <label>Documento:</label> <input type="text" name="documento"> <br><br> 

        <label>Nombres:</label> <input type="text" name="nombres"> <br><br>

        <label>Apellidos:</label> <input type="text" name="apellidos"> <br><br> 

        <label>Fecha de nacimiento:</label> <input type="date" name="fecha_nacimiento"> <br><br>

        <label>Teléfono:</label> <input type="text" name="telefono"> <br><br>

        <label>Correo electrónico:</label> <input type="email" name="correo"> <br><br>

        <label>Dirección:</label> <input type="text" name="direccion"> <br><br>

        <label>Estado:</label> 
        <select name="estado">
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select> <br><br>

        <button type="submit"> Guardar </button> 
    </form>

</body>
</html>