<?php 
class Conectar { 
    
public function conexion(){
   $con = mysqli_connect("localhost","root", "admin123", "gestorasistencia");
   return $con;
}

   }
    ?>
    
