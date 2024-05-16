<?php
        include("Navegacion.php");
        echo "<h1> ACTUALIZAR ESPECIALIDAD</h1>";
        Include("../controlador/ActualizarEspecialidad.php");
     echo' <form action="ActualizacionEspecialidad.php" method="post">
        <input type="hidden" id="Codigo" name="Codigo" value="'.$_GET["CodigoEspecialidad"].'">
        <label for="">Codigo de Especialidad</label>
        <input type="number"name="CodigoEspecialidad"
        id="CodigoEspecialidad" value="'. $registro["CodigoEspecialidad"].'"><br>
        <label for=""> nombre de Especialidad:</label>
        <input type="text"name="NombreEspecialidad"
        id="NombreEspecialidad" value="'. $registro["NombreEspecialidad"].'"><br>
        
        
        <button type="submit">actualizar Especialidad</button>
    </form>';
    include ("footer.php");
    ?>