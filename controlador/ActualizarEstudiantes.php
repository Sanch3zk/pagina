<?php

//echo $post["ProyectoEstudiantes];
include("bd.php");  
 if (!empty($_GET["CodigoEstudiante"])){
    $Consulta = "select * from estudiante where CodigoEstudiante = ".$_GET["CodigoEstudiante"];
    $Resultado=false;
    try {
        $Resultado= mysqli_query($Conexion, $Consulta);
       }
    catch (Exception $e)
         { $Mensaje="no se pudo consultar el el estudiante con codigo".$_GET["CodigoEstudiante"];
            //$error=$e->getMessage();
            Print $e->getMessage();
            //print $Resultado();
         }
    if($Resultado ==FALSE) { $Mensaje="No se pudo consultar el estudiante con codigo".$_GET["CodigoEstudiante"];
                     //die($mysqli_error($Conexion));  
                }
    else { $Mensaje="se pudo consultar el estudiante con codigo".$_GET["CodigoEstudiante"];
    }
    $Registro=$Resultado->fetch_assoc();
} //

 else if (!empty($_POST["CodigoEstudiante"]) && !empty($_POST["PrimerNombre"]) && !empty($_POST["PrimerApellido"]) && !empty($_POST["Curso"]) && !empty($_POST["EspecialidadEstudiante"]) && !empty($_POST["EstudianteProyecto"])){
   $CodigoEstudiante = $_POST["CodigoEstudiante"];
   $PrimerNombre = $_POST["PrimerNombre"];
   $SegundoNombre = $_POST["SegundoNombre"];
   $PrimerApellido = $_POST["PrimerApellido"];
   $SegundoApellido = $_POST["SegundoApellido"];
   $Curso = $_POST["Curso"];
   $Especialidad = $_POST["EspecialidadEstudiante"];
   $Proyecto = $_POST["EstudianteProyecto"];
   $FechaNacimiento = $_POST["FechaNacimiento"];
                                                     
   $Consulta= "UPDATE estudiante SET CodigoEstudiante= '".$CodigoEstudiante."', PrimerNombre='".$PrimerNombre."',SegundoNombre='".$SegundoNombre."', PrimerApellido='".$PrimerApellido."', SegundoApellido='".$SegundoApellido."', Curso='".$Curso."', CodigoEspecialidad= '".$Especialidad."', CodigoProyecto= '".$Proyecto."',FechaNacimiento= '".$FechaNacimiento."'WHERE Estudiante.CodigoEstudiante=".$_POST["CodigoActual"];
   
   echo $Consulta;
                                  
    $Resultado=false;
    try {
        $Resultado= mysqli_query($Conexion, $Consulta);
       }
    catch (Exception $e)
         { $Mensaje="No se pudo actualizar el estudiante por error en los datos";
            //$error=$e->getMessage();
            Print $e->getMessage();
            //print $Resultado();
         }
    if($Resultado ==FALSE) { $Mensaje="No se pudo actualizar el estudiante";
                     //die($mysqli_error($Conexion));  
                }
    else { $Mensaje="El estudiante se nbo se actualizo  correctamente"; 
      //echo $Consulta;   
      header('location: Estudiantes.php');

   }
}
else {
    $Mensaje="El codigo, El primer nombre, El primer apellido, El curso, La especialidad, El proyecto son obligatorios";
    }
    echo "<h3>".$Mensaje."</h3>"; 

   //$EstudianteActualizando=$Resultado->fetch_assoc();
   //echo $EstudianteActualizando["NombreEspecialidad"];          
?>