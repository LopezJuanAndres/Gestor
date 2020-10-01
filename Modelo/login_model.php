<?php 
require_once 'Modelo/Conectar.php';
class Login_model extends Conectar {
    public function GetUsuario($DNI,$Contraseña){
$sql="SELECT * FROM login WHERE DNI='$DNI' AND Contraseña='$Contraseña'"; //almacena en la variable la consulta sql 
$result= $this->conexion()->query($sql);//almacena en la variable el resultado del metodo 
$numFilas=$result->num_rows;//almacena en la variable el resultado del metodo num_rows
if($numFilas=1){
    return true;//si el numero de filas es 1 devuelve verdadero
}
return false;
    }
}

?>