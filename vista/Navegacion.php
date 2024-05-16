<?php
echo'
<!DOCTYPE html>
<html>
<head>
<link rel= "stylesheet" href="/SANCHEZ_php1/css/estilo.css">
</head>
<body>
<ul>
  <li><a href="/SANCHEZ_php1">INICIO</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">ESTUDIANTE</a>
    <div class="dropdown-content">
      <a href="/SANCHEZ_php1/vista/Estudiantes.php">LISTARESTUDIANTE</a>
      <a href="/SANCHEZ_php1/vista/RegistroEstudiantes.php">REGISTRAR ESTUDIANTE</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">ESPECIALIDAD</a>
    <div class="dropdown-content">
      <a href="/SANCHEZ_php1/vista/Especialidades.php">LISTAR ESPECIALIDAD</a>
      <a href="/SANCHEZ_php1/vista/RegistroEspecialidades.php">REGISTRAR ESPECIALIDAD</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">PROYECTO</a>
    <div class="dropdown-content">
      <a href="/SANCHEZ_php1/vista/Proyectos.php">LISTAR PROYECTO</a>
      <a href="/SANCHEZ_php1/vista/RegistroProyectos.php">REGISTRAR PROYECTO</a>
    </div>
  </li>
</ul>';
?>


