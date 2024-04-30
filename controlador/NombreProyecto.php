<?php

include("bd.php");

$ConsultaE="select * from proyecto where CodigoProyecto='".$Registro["CodigoProyecto"]."'";

$ResultadoE=false;
    try {
    $ResultadoE= mysqli_query($Conexion, $ConsultaE);
       }
       catch (exception $e)
       { $Mensaje="No se pudo consultar el proyecto";
          //$error=$e->getMessage();
          Print $e->getMessage();
          //print $Resultado();
       }
  if($Resultado ==FALSE) { $Mensaje="No se pudo consultar el proyecto";
                   //die($mysqli_error($Conexion));  
              }
    else {
        $RegistroE=$ResultadoE->fetch_assoc();
        echo $RegistroE["NombreProyecto"];
         }
                    
        
            
        ?>