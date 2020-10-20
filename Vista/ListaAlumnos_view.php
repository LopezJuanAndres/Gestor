<div class="container">
<H1 class="text-center">Listado de Alumnos</H1>
<nav class="navbar justify-content-center navbar-expand-sm bg-dark navbar-dark sticky-top">
<form class="form-inline  " action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Nombre Alumno">
    <button class="btn btn-success" name="Buscar" type="submit" >Buscar</button>
  </form>
<ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="../Vista/Alumnos_view.php">Agregar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Modificar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Eliminar</a>
    </li>
    
    </ul>  
</nav> 
<div class="container">
<table class="table table-striped table-bordered table-hover ">
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
<td><?php echo $fila['Apellido'] ?> </td>
<td> <?php echo $fila['Nombre']?> </td>
<td><?php echo $fila['IdAlumno']?></td>
<td><?php echo $fila['Documento']?>  </td>
<td><?php echo $fila['Telefono']?> </td>
<td><?php echo $fila['Dirreccion']?> </td>
<td><?php echo $fila['Correo']?> </td>
<td><?php echo $fila['FechaNacimiento'];?> </td>
 </tr>
 <?php endforeach; ?>
</table>
</div>


