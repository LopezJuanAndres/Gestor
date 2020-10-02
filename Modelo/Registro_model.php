<?php 
include 'Conectar.php';
$DNI =$_POST['login'];
$Contraseña =$_POST['password'];
$recontraseña=$_POST['repassword'];
$insertar="INSERT INTO login VALUES ('$DNI','$Contraseña','$recontraseña')";
$query=mysqli_query($conexion,$insertar);
if ($query){
    echo "Correcto";
}else {
    echo "Incorrecto";
}

?>