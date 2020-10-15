<div class="container">
<H1>Listado de Alumnos</H1>
<nav class="navbar justify-content-center navbar-expand-sm bg-dark navbar-dark sticky-top">
<ul class="navbar-nav">
<ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Agregar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Modificar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Eliminar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Ver Todos</a>
    </li>
<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      Opciones
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Imprimir</a>
        <a class="dropdown-item" href="#">Modificar</a>
        <a class="dropdown-item" href="#">Eliminar</a>
      </div>
    </li>
    
  <form class="form-inline  " action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Nombre Alumno">
    <button class="btn btn-success" name="Buscar" type="submit" >Buscar</button>
  </form>
  </ul>
</nav> 
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
<th><?php echo $fila['FechaNacimiento'];?> </th>
 </tr>
 <?php endforeach; ?>
</table>

<form >
  <div class="row row-border-dark " >
    <div class="col">
      <input type="text" class="form-control" id="email" placeholder="Nombre Alumno" name="email" disabled>
    </div>
    <div class="col">
      <input type="password" class="form-control" placeholder="Apellido Alumno" name="pswd" disabled>
    </div>
    <div class="col">
      <input type="text" class="form-control" id="email" placeholder="Documento" name="email" disabled>
    </div>
    <div class="col">
      <input type="password" class="form-control" placeholder="Telefono" name="pswd" disabled>
    </div>
  </div> <br>
  <div class="row" >
    <div class="col">
      <input type="text" class="form-control" id="email" placeholder="Direccion" name="email" disabled>
    </div>
    <div class="col">
      <input type="password" class="form-control" placeholder="Correo electronico" name="pswd" disabled>
    </div>
    <div class="col">
      <input type="text" class="form-control" id="email" placeholder="Fecha de Nacimiento" name="email" disabled>
    </div>  
</div><br>
<div class="row">
    <div class="col "><button class="btn btn-success" name="Agregar" type="submit" disabled>Agregar</button>  </div>
    <div class="col "><button class="btn btn-success" name="Editar" type="submit"disabled>Modificar</button>  </div>
    <div class="col"><button class="btn btn-success" name="Borrar" type="submit"disabled>Eliminar</button>  </div>
    <div class="col "><button class="btn btn-success" name="Ver" type="submit"disabled>Ver Todos</button> </div>
    <div class="col "><button class="btn btn-danger" name="Cancelar" type="submit"disabled>Cancelar</button> </div>
    </div>

 </form>


