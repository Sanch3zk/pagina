<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros de proyectos</title>
</head>
<body>
    <h1>Regristro de Proyectos</h1>
    <?php include("../controlador/Registraproyecto.php")?>

    <form action="RegistroProyectos.php" method="post">
       <label for="Codigo">Codigo proyecto:</label>
       <input type="number" name="codigo" id="codigo"><br>
       <label for="NombreProyecto">Nombre de proyecto:</label>
       <input type="text" name="NombreProyecto" id="NombreProyecto"><br>
       <label for="Resumen">Resumen:</label>
       <textarea type="text" name="Resumen" id="Resumen"></textarea><br>
        <label for="FechaRegistro:">Fecha registro:</label>
        <input type="date" name="FechaRegistro" id="FechaRegistro">
        <button type="submit">Registrar</button>
    </form>
</body>
</html>