<?php
include ("bd.php");
if (!empty($_GET["CodigoEstudiante"])){
$CodigoEstudiante=$_GET["CodigoEstudiante"];
$ConsultaDel="DELETE FROM estudiante WHERE estudiante.CodigoEstudiante=".$CodigoEstudiante;

//echo $ConsultaDel;

$ResultadoDel= false;
try{
      $ResultadoDel= mysqli_query($Conexion, $ConsultaDel);
    }
    catch(exception $e)
      { $Mensaje="no se  pudo eliminar el estudiante";
       //serror=se->getmessage();
       print $e->getmessage();
       //print $e->getMessage();
     } 
   if($ResultadoDel== False) { $Mensaje="se elimino el estudiante con codigo:".$CodigoEstudiante;
                 // die(mysqli_error($Conexion));
                  }
   else { $Mensaje="se elimino el estudiante con codigo:".$CodigoEstudiante;
  }
  echo $Mensaje;
} //fin si externo
?>