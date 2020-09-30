<?php 
 include '../Vista/Login_view.php';
 include '../Modelo/login_model.php';
 
if (isset($_POST['submit'])){
    $DNI =$_POST['login'];
    $Contraseña =$_POST['password'];
    if (empty($DNI) || empty($Contraseña)) {
        echo '<div class="alert-danger">Nombre de usuario o contraseña vacio</div>';
    } else {
        $usuario=new Login_model;
        if($usuario->GetUsuario($DNI,$Contraseña)==true){
            session_start();
            $_SESSION['Profesor']=$DNI;
            header('Location:Menu_controller.php');
        }else {
            echo '<div class="alert-danger">El usuario no existe</div>';
        }
        }
    }
?>