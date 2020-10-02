<?php 


 include '../Modelo/Registro_model.php';
 require '../Vista/Registro_view.php';
 
 if (isset($_POST['Registrar'])){
    $DNI =$_POST['login'];
    $Contraseña =$_POST['password'];
    $recontraseña=$_POST['repassword'];
if (empty($DNI) || empty($Contraseña)||empty($recontraseña)){
     echo '<div class="alert-danger">Complete todos los campos</div>'; }
 else {
    $usuarionuevo= new Registro_model;
    $usuarionuevo-> SetUsuario($DNI,$Contraseña);
      //header('Location:../Index.php');
      echo '<div class="alert-success">Cuenta registrada correctamente</div>';
 }      
}

if (isset($_POST['Cancelar'])){
header('Location:../Index.php');
}
   
?>