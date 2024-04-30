<?php
if (!empty($_POST["CodigoEspecialidad"])  && !empty($_POST["NombreEspecialidad"])){
    $CodigoEspecialidad = $_POST["CodigoEspecialidad"]; 
    $NombreEspecialidad = $_POST["NombreEspecialidad"];

    include("bd.php");                                        
    $Consulta="INSERT INTO especialidad (CodigoEspecialidad, NombreEspecialidad) VALUES ('".$CodigoEspecialidad."', '".$NombreEspecialidad."')";
    $Resultado= false;
    try{
      $Resultado= mysqli_query($Conexion, $Consulta);
    }
    catch(exception $e)
      { $Mensaje="No se  pudo registrar la especialidad";
       //serror=se->getmessage();
       //print $e->getmessage();
       //print $e->getMessage();
     } 
   if($Resultado == False) { $Mensaje="No se  pudo registrar la especialidad";
                 // die(mysqli_error($Conexion));
                  }     
   else{ $Mensaje="La especialidad se registro correctamente"; }

   
    }// Fin del if
else {
    $Mensaje="<h3>El codigo y el nombre de la especialidad es obligatorio</h3>";
    }
  echo $Mensaje; 
?>