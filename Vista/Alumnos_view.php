<?php include '../Partes/Encabezado.php'?>
<div class="container ">
          <div class="row mt-5 justify-content-md-center bg-dark">
                   
                  <form>
                              <div class="row  mt-3 justify-content-md-center" >
                                <div class="col  ">
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
                              <div class="row   justify-content-md-center" >
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
                            <div class="row mb-3 justify-content-md-center" id="Botones">
                                <div class="col "><button class="btn btn-success" name="Agregar" type="submit" disabled>Agregar</button>  </div>
                                <div class="col "><button class="btn btn-success" name="Editar" type="submit"disabled>Modificar</button>  </div>
                                <div class="col"><button class="btn btn-success" name="Borrar" type="submit"disabled>Eliminar</button>  </div>
                                <div class="col "><button class="btn btn-success" name="Ver" type="submit"disabled>Ver Todos</button> </div>
                                <div class="col "><button class="btn btn-danger" name="Cancelar" type="submit"disabled>Cancelar</button> </div>
                                </div>

                  </form>
                      
           </div>  
                 
              
      </div>       
      <?php include '../Partes/Pie.php'?>