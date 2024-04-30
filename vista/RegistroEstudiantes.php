<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Estudiantes</title>
</head>
<body>
    <h2>Registro de Estudiantes</h2>
    <?php include("../controlador/RegistrarEstudiantes.php")?>
    <form action="RegistroEstudiantes.php" method="post">
        <label for="CodigoEstudiante">Codigo Estudiante:</label>
        <input type="number" name="CodigoEstudiante" id="CodigoEstudiante"><br>

        <label for="PrimerNombre">Primer Nombre:</label>
        <input type="text" name="PrimerNombre" id="PrimerNombre"><br>

        <label for="SegundoNombre">Segundo Nombre:</label>
        <input type="text" name="SegundoNombre" id="SegundoNombre"><br>

        <label for="PrimerApellido">Primer Apellido:</label>
        <input type="text" name="PrimerApellido" id="PrimerApellido"><br>

        <label for="SegundoApellido">SegundoApellido:</label>
        <input type="text" name="SegundoApellido" id="SegundoApellido"><br>

        <label for="Curso">Curso:</label>
        <input type="number" name="Curso" id="Curso"><br>
        
        <label for="EspecialidadEstudiante">Especialidad</label>
        <?php include("../controlador/ComboEspecialidades.php"); ?> 
        <br>
        <label for="ProyectoEstudiante">Proyecto</label>
        <?php include("../controlador/ComboProyectos.php"); ?> 
            </select><br>
        <label for="FechaNacimiento">Fecha de nacimiento:</label>
        <input type="date" name="FechaNacimiento" id="FechaNacimiento"><br>
        <button type="submit">Registrar Estudiante</button>
    </form>

</body>
</html>