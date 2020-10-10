<div class="container">

<H1>Listado de Alumnos</H1>
<table class="table  table-bordered table-hover ">
<tr>
<th>Id</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Documento</th>
<th>Telefono</th>
<th>Direccion</th>
<th>Correo</th>
<th>Fecha de Nacimiento</th>
 </tr>
<?php include"../Modelo/alumnos_model.php";
$alumnos=new Alumnos;
$lista=$alumnos->GetAlumnos();
$fila=mysqli_fetch_row($lista) ;
 foreach($lista as $fila):?>
<tr>
<th><?php echo $fila['IdAlumno']?></th>
<th> <?php echo $fila['Nombre']?> </th>
<th><?php echo $fila['Apellido'] ?> </th>
<th><?php echo $fila['Documento']?>  </th>
<th><?php echo $fila['Telefono']?> </th>
<th><?php echo $fila['Dirreccion']?> </th>
<th><?php echo $fila['Correo']?> </th>
<th><?php echo $fila['FechaNacimiento']?> </th>
 </tr>
 <?php endforeach; ?>
</table>
</div>         
