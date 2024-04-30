<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizacion de Estudiantes</title>
</head>
<body>
    <h2>Actualizacion de Estudiantes</h2>
    <?php include("../controlador/ActualizarEstudiantes.php")?>
    <form action="ActualizacionEstudiantes.php" method="post">

        <input type="hidden" id="CodigoActual" name="CodigoActual" value="<?php echo $_GET["CodigoEstudiante"];?>">
        
        <label for="CodigoEstudiante">Codigo Estudiante:</label>
        <input type="number" name="CodigoEstudiante" id="CodigoEstudiante" value="<?php echo $Registro ["CodigoEstudiante"]; ?>"> <br>

        <label for="PrimerNombre">Primer Nombre:</label>
        <input type="text" name="PrimerNombre" id="PrimerNombre" value ="<?php echo $Registro ["PrimerNombre"]; ?>"><br>

        <label for="SegundoNombre">Segundo Nombre:</label>
        <input type="text" name="SegundoNombre" id="SegundoNombre" value ="<?php echo $Registro ["SegundoNombre"]; ?>"><br>

        <label for="PrimerApellido">Primer Apellido:</label>
        <input type="text" name="PrimerApellido" id="PrimerApellido" value ="<?php echo $Registro ["PrimerApellido"]; ?>"><br>

        <label for="SegundoApellido">SegundoApellido:</label>
        <input type="text" name="SegundoApellido" id="SegundoApellido" value ="<?php echo $Registro ["SegundoApellido"]; ?>"><br>

        <label for="Curso">Curso:</label>
        <input type="number" name="Curso" id="Curso" value ="<?php echo $Registro ["Curso"]; ?>"><br>
        
        <label for="EspecialidadEstudiante">Especialidad</label>
        <?php include("../controlador/ComboEspecialidades.php"); ?> 
        <br>
        <label for="ProyectoEstudiante">Proyecto</label>
        <?php include("../controlador/ComboProyectos.php"); ?> 
            </select><br>
        <label for="FechaNacimiento">Fecha de nacimiento:</label>
        <input type="date" name="FechaNacimiento" id="FechaNacimiento" value ="<?php echo $Registro ["FechaNacimiento"]; ?>"><br>
        <button type="submit">Actualizar Estudiantes</button>
    </form>

</body>
</html>