<?php

include ("bd.php");

$Consulta="select * from Estudiante";

$Resultado= false;
try{
      $Resultado= mysqli_query($Conexion, $Consulta);
    }
    catch(exception $e)
      { $Mensaje="no se  pudo consultar los proyecto";
       //serror=se->getmessage();
       print $e->getmessage();
       //print $e->getMessage();
     } 
   if($Resultado == False) { $Mensaje="no se  pudo consultar los proyecto";
                 // die(mysqli_error($Conexion));
                  }
   else {
        echo'<table border="1"> 
        <tr>
           <td>CODIGO DEL ESTUANTE</td>
           <td>PRIMER NOMBRE DEL ESTUDIANTE</td>
           <td>SEGUNDO NOMBRE DEL ESTUDIANTE</td>
           <td>PRIMER APELLIDO DEL ESTUDIANTE</td>
           <td>SEGUNDO APELLIDO DEL ESTUDIANTE</td>
           <td>CURSO DE ESTUDIANTE</td>
           <td>CODIGO DEL ESPECIALIDAD</td>
           <td>CODIGO DEL PROYECTO</td>
           <td>FECHA DE NACIMIENTO</td>
           <td colspan="2">Accines</td>
        </tr>';
       while($Registro=$Resultado->fetch_assoc()){
         echo'
        <tr>
           <td>'.$Registro["CodigoEstudiante"].'</td>
           <td>'.$Registro["PrimerNombre"].'</td>
           <td>'.$Registro["SegundoNombre"].'</td>
           <td>'.$Registro["PrimerApellido"].'</td>
           <td>'.$Registro["SegundoApellido"].'</td>
           <td>'.$Registro["Curso"].'</td>
           <td>';
          include("NombreEspecialidad.php");
          echo '</td>
          <td>';
          include ("NombreProyecto.php");
          echo'</td>
           <td>'.$Registro["FechaNacimiento"].'</td>
           <td><a href="ActualizacionEstudiantes.php?CodigoEstudiante='.$Registro["CodigoEstudiante"].'">Editar</a></td>
           <td><a href="Estudiantes.php?CodigoEstudiante='.$Registro["CodigoEstudiante"].'">ELIMINAR</a></td>
          
         </tr>';
     
        }  //fin del ciclo de listado de especialidades
    echo  '</table>';
 }  

 

?>