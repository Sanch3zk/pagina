<?php

include ("bd.php");

$Consulta="select * from especialidad";

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
           <td>CODIGO</td>
           <td>NOMBRE DE LA ESPECIALIDAD</td>
           <td colspan="2">Accines</td>
        </tr>';
       while($Registro=$Resultado->fetch_assoc()){
         echo'
        <tr>
           <td>'.$Registro["CodigoEspecialidad"].'</td>
           <td>'.$Registro["NombreEspecialidad"].'</td>
           <td><a href="ActualizacionEstudiantes.php?CodigoEspecialidad='.$Registro["CodigoEspecialidad"].'">Editar</a></td>
           <td><a href="#" onclick="Preguntar('.$Registro["CodigoEspecialidad"].')">ELIMINAR</a></td>
          
          
         </tr>';
     
        }  //fin del ciclo de listado de especialidades
    echo  '</table>';
 }  

 

?>

<script type= "text/javascript">
 function Preguntar(CodigoEspecialidad)
 {
   if(confirm("¿esta seguro de eliminar la especialidad?"+CodigoEspecialidad+"?"))
   {
     window.location.href = "especialidades.php? CodigoEspecialidad="+CodigoEspecialidad;
   }
 }
  </script>
