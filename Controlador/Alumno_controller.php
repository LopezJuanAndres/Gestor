 
<?php /* include '../Partes/Encabezado.php'?>
<div class="container">
<nav id="nav" class="navbar justify-content-center navbar-expand-sm bg-dark navbar-dark sticky-top" >
 <ul class="navbar-nav">
         <li class="nav-item dropdown m-1">
            <a class="nav-link dropdown-toggle bg-success" href="#" id="navbardrop" data-toggle="dropdown"> Alumnos </a>
            <div class="dropdown-menu bg-dark  ">
            <a class="dropdown-item text-success" href="">Ver Alumnos</a>
            <a class="dropdown-item text-success" href="#">Agregar-Modificar-Eliminar</a>
            <a class="dropdown-item text-success" href="#">Imprimir Alumnos</a>
            </div>
         </li>
         <li class="nav-item m-1">
            <a class="nav-link bg-success" href="#">Asistencia</a>
         </li>
         <li class="nav-item  m-1">
            <a class="nav-link bg-success" href="#">Clases</a>
         </li>
         <li class="nav-item  m-1">
            <a class="nav-link bg-success" href="#">Profesores</a>
         </li>
   </ul>
</nav>
 <h1 class="text-center">Gestor De Asistencia Web</h1>
  </div>
  <?php include '../Vista/ListaAlumnos_View.php';?>
 <?php include '../Partes/Pie.php'?>  */
 

 include '../Modelo/alumnos_model.php';
 include '../Vista/Alumnos_view.php'; 

    $IdAlumno;
    $Nombre;
    $Apellido;
    $Documento;
    $Telefono;
    $Direccion;
    $Correo ;
    $FNac;
 
    if ( isset($_POST['Agregar'])||isset($_POST['Editar'])|| isset($_POST['Borrar'])||isset($_POST['Cancelar'])){
      $Nombre=$_POST['Nombre'];
      $Apellido=$_POST['Apellido'];
      $Documento=$_POST['Dni'];
      $Telefono=$_POST['Tel'];
      $Direccion=$_POST['Domicilio'];
      $Correo=$_POST['Correo'];
      $FNac=$_POST['FN'];

      if ( empty($Nombre) || empty($Apellido) || empty($Documento) || empty($Telefono)|| empty($Direccion) || empty($Correo)|| empty($FNac)   ) {}
            echo '<div class=" text-center alert-danger">Ningun campo puede quedar vacio</div>';
            
                  } 

   


 /*if (isset($_POST['Iniciar'])){
   $DNI =$_POST['login'];
   $Contraseña =$_POST['password'];
   if (empty($DNI) || empty($Contraseña)) {
   echo '<div class="alert-danger">Nombre de usuario o contraseña vacio</div>';
} else {
   $usuario=new Login_model;
   
   if($usuario->GetUsuario($DNI,$Contraseña)==true){
      // session_start();
      // $_SESSION['Profesor']=$DNI;
       header('Location:Controlador/Menu_controller.php');
       }   else {
       echo '<div class="alert-danger">El usuario no existe</div>';
       
           }
} */




 ?>
