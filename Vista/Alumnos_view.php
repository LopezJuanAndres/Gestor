<?php include '../Partes/Encabezado.php'?>
<div class="container ">
          <div class="row mt-5 justify-content-md-center bg-dark">
                <div class="col-lg-12">
                <div class="card shadow-lg p-3 mt-2 mb-2 bg-warning">
                  <form  action="" method="POST" class="needs-validation">
                              <div class="form-row  mt-3 justify-content-md-center" >
                                        <div class="col  ">
                                          <input type="text" class="form-control"  placeholder="Nombre Alumno" name="Nombre" required >
                                          <div class="valid-feedback">!ok</div>
                                          <div class="invalid-feedback">complete el campo</div>
                                        </div>
                                        <div class="col">
                                          <input type="text" class="form-control" placeholder="Apellido Alumno" name="Apellido"required >  <div class="valid-feedback">!ok</div>
                                          <div class="invalid-feedback">complete el campo</div>
                                        </div>
                                        <div class="col">
                                          <input type="text" class="form-control"  placeholder="Documento" name="Dni" required> <div class="valid-feedback">!ok</div>
                                          <div class="invalid-feedback">complete el campo</div>
                                        </div>
                                        <div class="col">
                                          <input type="text" class="form-control" placeholder="Telefono" name="Tel"required > <div class="valid-feedback">!ok</div>
                                          <div class="invalid-feedback">complete el campo</div>
                                        </div>
                              </div> <br>
                              <div class="row   justify-content-md-center" >
                                      <div class="col">
                                        <input type="text" class="form-control"  placeholder="Direccion" name="Domicilio"required > <div class="valid-feedback">!ok</div>
                                          <div class="invalid-feedback">complete el campo</div>
                                      </div>
                                      <div class="col">
                                        <input type="text" class="form-control" placeholder="Correo electronico" name="Correo" required> <div class="valid-feedback">!ok</div>
                                          <div class="invalid-feedback">complete el campo</div>
                                      </div>
                                      <div class="col">
                                        <input type="text" class="form-control"  placeholder="Fecha de Nacimiento" name="FN"required > <div class="valid-feedback">!ok</div>
                                          <div class="invalid-feedback">complete el campo</div>
                                      </div>                     
                            </div><br>
                            <div class="row col-9 mb-3 justify-content-md-center" >
                                <div class="col "><button class="btn btn-success" name="Agregar" type="submit" >Agregar</button>  </div>
                                <div class="col "><button class="btn btn-success" name="Editar" type="submit">Modificar</button>  </div>
                                <div class="col"><button class="btn btn-success" name="Borrar" type="submit">Eliminar</button> </div>
                                <div class="col "><a href="ListaAlumnos_controller.php" class="btn btn-success">Ver Todos</a> </div>
                                <div class="col "><button class="btn btn-danger" name="Cancelar" type="submit">Cancelar</button> </div>
                            </div>
                  </form>
                  </div>                 
            </div> 
                </div>                 
            </div>       
      <?php include '../Partes/Pie.php'?>