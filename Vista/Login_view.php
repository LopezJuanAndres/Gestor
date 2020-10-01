<?php?>
    <div class="container">
     <div class="row mt-3 justify-content-md-center">
        <div class="col-md-3">
             <form action="" method="POST">
                 <div class="form-group">
                         <label for="DNI">DNI:</label>
                         <input class="form-control"name="login" placeholder="Numero de DNI" type="text" value="">
                 </div>
                 <div class="form-group">
                          <label for="password">Contraseña:</label>
                         <input class="form-control" name="password" value="" type="password">
                </div>
            <button type="submit" name="Iniciar" class="btn btn-sm btn-block btn-primary"> Iniciar Sesion</button>
            <button type="submit" name="Registrarse" class="btn btn-sm btn-block btn-primary"> Registrarse</button>
        </form>
      </div> 
      </div>    
      </div>            
 <?php include 'Partes/Pie.php'?>