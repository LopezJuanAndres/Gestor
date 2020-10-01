<?php 
require_once '../Modelo/Conectar.php';
class Registro_model extends Conectar {
    public function SetUsuario($DNI,$Contraseña){
$sql="INSERT INTO login (DNI,Contraseña) values ($DNI,$Contraseña)"; //almacena en la variable la consulta sql 
$result= $this->conexion()->query($sql);//almacena en la variable el resultado del metodo 
$numFilas=$result->num_rows;//almacena en la variable el resultado del metodo num_rows

    }
}

?>