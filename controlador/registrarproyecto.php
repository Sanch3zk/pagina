<?php

if(!empty($_POST ["Codigo"] )&& (!empty($_POST ["NombreProyecto"])) && 
(!empty($_POST ["Resumen"])) &&  
 (!empty($_POST ["F"]))) {
   $Codigo =$_POST ["Codigo"];
   $NombreProyecto = $_POST ["NombreProyecto"];
   $Resumen = $_POST ["Resumen"];
   $F = $_POST ["FechaReistro"];
  
   include("bd.php");            
 $consulta= "INSERT INTO proyecto (codigoproyecto, NombreProyecto
 ,Resumen, F) VALUES ('".$Codigo."', '".$NombreProyecto."', '".$Resumen."', '".$F."');";
 
 //echo $consulta;
 $resultado=false;
 try{
  $resultado = mysqli_query($conexion, $consulta);
     }
  catch(exception $e)
    {$mensaje = "no se pudo registrar el proyecto por error en los datos";
     //print $e ->getmessage();
     print $e ->getmessage();
    // print $resultado;
     }
   
 
   if($resultado==false) { $mensaje = "no se pudo registrar el proyecto"; 
           //die($mysqli_error($conexion));
         }
   else { $mensaje="el proyecto se registro correctamente"; }
   } //fin del if
 else {
   $mensaje="el Codigo, nombre del proyecto es obligatorio";
   }  
   echo "<h3>".$mensaje."</h3>";
 
?>