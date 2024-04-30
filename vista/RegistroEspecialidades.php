<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros de proyectos</title>
</head>
<body>
    <h1>Regristro de Especialidades</h1>
    <?php include("../controlador/RegistrarEspecialidad.php")?>
    <form action="RegistroEspecialidades.php" method="post">
       <label for="CodigoEspecialidad">Codigo:</label>
       <input type="number" name="CodigoEspecialidad" id="CodigoEspecialidad"><br>
       <label for="NombreEspecialidad">Nombre de Especialidad:</label>
       <input type="text" name="NombreEspecialidad" id="NombreEspecialidad"><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>