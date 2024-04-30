<?php
include("bd.php");

$ConsultaEsp="SELECT * FROM especialidad";

$ResultadoEsp= false;
try{
      $ResultadoEsp= mysqli_query($Conexion, $ConsultaEsp);
    }
    catch(exception $e)
      { $Mensaje="no se  pudo consultar las especialidades";
       //serror=se->getmessage();
       print $e->getmessage();
       //print $e->getMessage();
     } 
   if($ResultadoEsp == False) { $Mensaje="no se  pudo consultar las especialidades";
                 // die(mysqli_error($Conexion));
                  }
   else {
        echo'<select name="EspecialidadEstudiante" id="EspecialidadEstudiante">';
       while($RegistroEsp=$ResultadoEsp->fetch_assoc()){
        if ($Registro["CodigoEspecialidad"]==$RegistroEsp["CodigoEspecialidad"]){
          echo '<option value="'.$RegistroEsp["CodigoEspecialidad"].'" selected>'.$RegistroEsp["NombreEspecialidad"].'</option>';
        }
        else {echo '<option value="'.$RegistroEsp["CodigoEspecialidad"].'">'.$RegistroEsp["NombreEspecialidad"].'</option>';}
       } //fin del ciclo de listado de especialidades
    echo '</select>';
   }  

?>


