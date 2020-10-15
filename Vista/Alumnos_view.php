<div class="container">


<nav id="nav" class="navbar navbar-expand-sm bg-light" >
    <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Link 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 3</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      menu Desplegable
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>

  </ul>
</nav>
     <div class="row mt-3 justify-content-md-center">
        <div class="col-md-3">
             <form  class="form-inline" action="" method="POST">
                 <div class="form-group">
                         <label for="Nombre">Ingrese el Nombre del alumno:</label>
                         <input class="form-control"name="Nombre" placeholder="Juan Carlos" type="text" value="">
                 </div>
                 <div class="form-group">
                         <label for="Apellido">Ingrese el Apellido del alumno:</label>
                         <input class="form-control"name="Apellido" placeholder="Perez" type="text" value="">
                 </div>
                 <div class="form-group">
                         <label for="DNI">Ingrese el DNI del alumno:</label>
                         <input class="form-control"name="Documento" placeholder="34555223" type="text" value="">
                 </div>
                 <div class="form-group">
                         <label for="Telefono">Ingrese el Telefono del alumno:</label>
                         <input class="form-control"name="Telefono" placeholder="0342-4321223" type="text" value="">
                 </div>
                 <div class="form-group">
                         <label for="Direccion">Ingrese el Domicilio del alumno:</label>
                         <input class="form-control"name="Direccion" placeholder=" 3 de febrero 3222" type="text" value="">
                 </div>
                 <div class="form-group">
                         <label for="Correo">Ingrese el Correo electronico del alumno:</label>
                         <input class="form-control"name="Correo" placeholder="@ejemplo.com" type="text" value="">
                 </div>
                 <div class="form-group">
                          <label for="FechaNacimiento">Fecha de Nacimiento del alumno </label>
                         <input class="form-control" name="FechaNac" placeholder="dd-mm-aaaa"  value="" type="text">
                </div>
            <button type="submit" name="Añadir" class="btn btn-sm btn-block btn-primary"> Agregar</button>
            <button type="submit" name="Editar" class="btn btn-sm btn-block btn-primary"> Modificar</button>
            <button type="submit" name="Eliminar" class="btn btn-sm btn-block btn-primary"> Eliminar</button>
            <button type="submit" name="Ver" class="btn btn-sm btn-block btn-primary"> Ver todos</button>

        </form>
      </div> 
      </div>    
      </div>         
