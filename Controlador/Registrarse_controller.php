<?php 
 include '../Modelo/Registro_model.php';
 require '../Vista/Registro_view.php';
 
 if (isset($_POST['Registrar'])){
    $DNI =$_POST['login'];
    $Contraseña =$_POST['password'];
    
    if (empty($DNI) || empty($Contraseña)) {
      echo '<div class="alert alert-warning">Complete todos los campos por favor!</div>';
    }
 else {
    $usuarionuevo= new Registro;
    if ($usuarionuevo->Verificar()==1){
      echo'<div class="alert alert-warning">El Usuario ya existe en la base de datos</div>';
    }
    $usuarionuevo-> SetUsuario($DNI,$Contraseña);
    header('Location:../Index.php');
     
 }      
}

if (isset($_POST['Cancelar'])){
header('Location:../Index.php');
}
  
?>