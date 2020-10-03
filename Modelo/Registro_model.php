<?php 
include ("Conectar.php");

class Registro extends Conectar {
    public function SetUsuario($DNI,$Contraseña){
        $sql="INSERT INTO login (DNI,Contraseña) VALUES ('$DNI','$Contraseña')";
        $result=$this->conexion()->query($sql);
    }

public function Verificar(){
    $sql='SELECT * FROM login';
    $result=$this->conexion()->query($sql);
     $verificar=0;
    while($resultado=mysqli_fetch_object($result))
    {if ($resultado->DNI==$_POST['login'])
     {
          $verificar=1;
     }
     }
    return $verificar;
}

}

?>