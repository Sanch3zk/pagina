<?php
include("bd.php");

$ConsultaProm="SELECT * FROM proyecto";
//echo $ConsultaProm."<br>";
$ResultadoProm= false;
try{
      $ResultadoProm = mysqli_query($Conexion, $ConsultaProm);
    }
    catch(Exception $e)
      { $Mensaje="no se  pudo consultar los proyecto";
       //serror=se->getmessage();
       print $e->getmessage();
       //print $e->getMessage();
     } 
   if($ResultadoProm == False) { $Mensaje="no se  pudo consultar los proyecto";
                 // die(mysqli_error($Conexion));
    }
              
    else {
      //echo $ResultadoProm;
     //print_r($ResultadoProm);
      
    echo'<select name="EstudianteProyecto" id="EstudianteProyecto">';
    while($RegistroProm=$ResultadoProm->fetch_assoc()){
      print_r($RegistroProm);
    if ($Registro["CodigoProyecto"]==$RegistroProm["CodigoProyecto"]){
     echo '<option value="'.$RegistroProm["CodigoProyecto"].'" selected>'.$RegistroProm["NombreProyecto"].'</option>';
     }
     else {echo '<option value="'.$RegistroProm["CodigoProyecto"].'">'.$RegistroProm["NombreProyecto"].'</option>';}
     } //fin del ciclo de listado de proyectos
      echo '</select>';
   } 

   //echo $Mensaje;

?>