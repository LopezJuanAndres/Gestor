<?php include '../Partes/Encabezado.php'?>
    <div class="container">
     <div class="row mt-3 justify-content-md-center">
        <div class="col-md-3">
             <form action="" method="POST">
                 <div class="form-group">
                         <label for="DNI">Ingrese el DNI:</label>
                         <input class="form-control"name="login" placeholder="Numero de DNI" type="text" value="">
                 </div>
                 <div class="form-group">
                          <label for="password">Ingrese una Contraseña:</label>
                         <input class="form-control" name="password" value="" type="password">
                         <label for="password">Reingrese la Contraseña:</label>
                         <input class="form-control" name="repassword" value="" type="password">
                </div>
            <button type="submit" name="Registrar" class="btn btn-sm btn-block btn-primary"> Crear Cuenta</button>
            <button type="submit" name="Cancelar" class="btn btn-sm btn-block btn-primary"> Cancelar</button>
        </form>
      </div> 
      </div>    
      </div>            
 <?php include '../Partes/Pie.php'?>