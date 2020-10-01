<?php 
 include '../Vista/Registro_view.php';
 include '../Modelo/Registro_model.php';
 
if (isset($_POST['Registrar'])){
    $DNI =$_POST['login'];
    $Contraseña =$_POST['password'];
    $recontraseña=$_POST['repassword'];
    if (empty($DNI) || empty($Contraseña)||empty($recontraseña)) {
        echo '<div class="alert-danger">Complete todos los campos</div>';
    } else {
        $usuario=new Registro_model;
        if($usuario-> SetUsuario($DNI,$Contraseña)==true){
            echo '<div class="alert-success">Cuenta registrada correctamente</div>';
            header('Location:Login_controlador.php');
        }else {
            echo '<div class="alert-danger">El usuario no existe</div>';
        }
        }
    }
    if (isset($_POST['Cancelar'])){
        header('Location:../Index.php');
    }
?>