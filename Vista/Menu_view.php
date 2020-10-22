<?php include '../Partes/Encabezado.php'?>
<div class="container">
<h1 class="text-center">Gestor De Asistencia Web</h1>
<nav id="nav" class="navbar justify-content-center navbar-expand-sm bg-dark navbar-dark sticky-top" >
    <ul class="navbar-nav">
            <li class="nav-item dropdown  m-1">
               <a class="nav-link dropdown-toggle bg-success" href="#" id="navbardrop" data-toggle="dropdown"> Alumnos </a>
               <div class="dropdown-menu bg-dark  ">
               <a class="dropdown-item text-success" href="ListaAlumnos_controller.php">Ver Alumnos</a>
               <a class="dropdown-item text-success" href="Alumno_controller.php">Agregar-Modificar-Eliminar</a>
               <a class="dropdown-item text-success" href="ReporteAlumnos_controller.php">Imprimir Alumnos</a>
               </div>
            </li>
            <li class="nav-item m-1">
               <a class="nav-link bg-success" href="Asistencia_controller.php">Asistencia</a>
            </li>
            <li class="nav-item  m-1">
               <a class="nav-link bg-success" href="Clases_controller.php">Clases</a>
            </li>
            <li class="nav-item  m-1">
               <a class="nav-link bg-success" href="Profesores_controller.php">Profesores</a>
            </li>
      </ul>
</nav>
   
     </div>
     <?php include '../Partes/Pie.php'?>