<?php

include ("bd.php");

$Consulta="select * from proyecto";

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
           <td>CODIGO DEL PROYECTO</td>
           <td>NOMBRE DEL PROYECTO</td>
           <td>RESUMEN</td>
           <td>FECHA DE REGISTRO</td>
           <td colspan="2">Accines</td>
        </tr>';
       while($Registro=$Resultado->fetch_assoc()){
         echo'
        <tr>
           <td>'.$Registro["CodigoProyecto"].'</td>
           <td>'.$Registro["NombreProyecto"].'</td>
           <td>'.$Registro["Resumen"].'</td>
           <td>'.$Registro["FechaRegistro"].'</td>
           <td>Editar</td>
           <td>ELIMINAR</td>
          
         </tr>';
     
        }  //fin del ciclo de listado de especialidades
    echo  '</table>';
 }  

 

?>