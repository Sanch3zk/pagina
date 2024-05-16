<?php
include("Navegacion.php");
echo"<h1>REGISTRAR PROYECTO</h1>";
include("../controlador/RegistrarProyecto.php");
echo' <form action="RegistroProyectos.php" method="post">
       <label for="Codigo">Codigo proyecto:</label>
       <input type="number" name="codigo" id="codigo"><br>
       <label for="NombreProyecto">Nombre de proyecto:</label>
       <input type="text" name="NombreProyecto" id="NombreProyecto"><br>
       <label for="Resumen">Resumen:</label>
       <textarea type="text" name="Resumen" id="Resumen"></textarea><br>
        <label for="FechaRegistro:">Fecha registro:</label>
        <input type="date" name="FechaRegistro" id="FechaRegistro">
        <button type="submit">Registrar</button></from>';
        include("Footer.php");
 ?>