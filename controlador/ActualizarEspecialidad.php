<?php

include("bd.php"); 

 if(!empty($_GET ["CodigoEspcialidad"] )) {
  $consulta = "select * from especialidad where CodigoEspcialidad =".$_GET [C"];
  $resultado=false; 
 
  try{
 $resultado = mysqli_query($conexion, $consulta);
    }
 catch(exception $e)
   {$mensaje = "no se pudo colsutar la especialidad con codigo".$_GET [C"]; 
    //print $e ->getmessage();
    print $e ->getmessage();
   // print $resultado;
    }
    

  if($resultado==false) { $mensaje = "no se puede consultar la especialidad con codigo ".$_GET [C"]; 
          //die($mysqli_error($conexion));
        }
  else { $mensaje="se pudo consultar la especialidad con el codigo ". $_GET[C"]; } 
  $registro= $resultado -> fetch_assoc();
    }//
  


else if(!empty($_POST[C"] )&& (!empty($_POST["nombreespecialidad"]))) {
  $codigoespecialidad =$_POST [C"];
  $nombreespecialidad =$_POST ["nombreespecialidad"];

     $consulta= "UPDATE especialidad SET codigoespecialidad = '".$codigoespecialidad."', nombreespecialidad = '".$nombreespecialidad."' WHERE especialidad.codigoespecialidad =".$_POST[C"];        


  echo $consulta;

  $resultado=false;

  try{
 $resultado = mysqli_query($conexion, $consulta);
    }
 catch(exception $e)
   {$mensaje = "no se pudo actualizar la especialidad por error en los datos";
    //print $e ->getmessage();
    print $e ->getmessage();
   // print $resultado;
    }
    

  if($resultado==false) { $mensaje = "no se pudo actualizar el especialidad"; 
          //die($mysqli_error($conexion));
        }
  else { $mensaje="la especialidad se actualizo correctamente"; 
      header('Location: especialidad.php');
        }
  } //fin del if
else {
  $mensaje="el codigo de especialidad,  nombre especialidad son  obligatorio";
  }  
  echo "<h3>".$mensaje."</h3>";
 
?>