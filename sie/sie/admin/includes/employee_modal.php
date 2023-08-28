

<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Agregar Empleado</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_add.php" enctype="multipart/form-data">
          		  <div class="form-group">
                  	<label for="document" class="col-sm-3 control-label">Documento</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="document" name="document" required placeholder="Ingrese el documento del empleado">
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="firstname" class="col-sm-3 control-label">Nombres</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="firstname" name="firstname" required placeholder="Ingrese el nombre del empleado">
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="lastname" class="col-sm-3 control-label">Apellidos</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="lastname" name="lastname" required placeholder="Ingrese el apellido del empleado">
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="datepicker_add" class="col-sm-3 control-label">Nacimiento</label>

                  	<div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="datepicker_add" name="birthdate" required placeholder="Año - Mes - Dìa">
                      </div>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="gender_val" class="col-sm-3 control-label">Sexo</label>

                  	<div class="col-sm-9"> 
                      <select class="form-control" id="gender_val" name="gender" required>
                          <option value="" selected>- Seleccionar -</option>
                          <?php
                              $sql = "SELECT * FROM gender";
                              $query = $conn->query($sql);
                              while($arow = $query->fetch_assoc()){
                                echo "<option value='".$arow['id']."'>".$arow['description']."</option>";
                              }
                          ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  	<label for="status_val" class="col-sm-3 control-label">Estado Civil</label>

                  	<div class="col-sm-9"> 
                      <select class="form-control" id="status_val" name="status" required>
                          <option value="" selected>- Seleccionar -</option>
                          <?php
                              $sql = "SELECT * FROM status";
                              $query = $conn->query($sql);
                              while($brow = $query->fetch_assoc()){
                                echo "<option value='".$brow['id']."'>".$brow['description']."</option>";
                              }
                          ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  	<label for="address" class="col-sm-3 control-label">Dirección</label>

                  	<div class="col-sm-9">
                      <textarea class="form-control" name="address" id="address" required placeholder="Ingrese la dirección del empleado"></textarea>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="city_val" class="col-sm-3 control-label">Ciudad</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="city_val" name="city" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM cities";
                          $query = $conn->query($sql);
                          while($crow = $query->fetch_assoc()){
                            echo "
                              <option value='".$crow['id']."'>".$crow['description']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  	<label for="contact" class="col-sm-3 control-label">Teléfono</label>

                  	<div class="col-sm-9"> 
                      <div class="date">
                        <input type="number" class="form-control" id="contact" name="contact" required placeholder="Ingrese el telèfono del empleado">
                      </div>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="mail" class="col-sm-3 control-label">Correo</label>

                  	<div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="mail" name="mail" required placeholder="Ingrese el correo del empleado">
                      </div>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="position" class="col-sm-3 control-label">Cargo</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="position" id="position" required>
                        <option value="" selected>- Seleccionar -</option>
                        <?php
                          $sql = "SELECT * FROM position";
                          $query = $conn->query($sql);
                          while($drow = $query->fetch_assoc()){
                            echo "
                              <option value='".$drow['id']."'>".$drow['description']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  	<label for="password" class="col-sm-3 control-label">Contraseña</label>

                  	<div class="col-sm-9"> 
                      <div class="date">
                        <input type="password" class="form-control" id="password" name="password" required>
                      </div>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Foto</label>

                    <div class="col-sm-9">
                      <input type="file" name="photo" id="photo">
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Guardar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">  
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="document"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_edit.php">
            		<input type="hidden" class="empid" name="id">

                <div class="form-group">
                  	<label for="edit_firstname" class="col-sm-3 control-label">Nombres</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="edit_firstname" name="firstname"  required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="edit_lastname" class="col-sm-3 control-label">Apellidos</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="edit_lastname" name="lastname" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="datepicker_edit" class="col-sm-3 control-label">F. Nacimiento</label>
                  	<div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="datepicker_edit" name="birthdate" required>
                      </div>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="edit_sex" class="col-sm-3 control-label">Sexo</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="gender" id="edit_sex">
                        <option selected id="sex_val"></option>
                        <?php
                          $sql = "SELECT * FROM gender";
                          $query = $conn->query($sql);
                          while($erow = $query->fetch_assoc()){
                            echo "
                              <option value='".$erow['id']."'>".$erow['description']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_status" class="col-sm-3 control-label">Estado Civil</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="status" id="edit_status">
                        <option selected id="stat_val"></option>
                        <?php
                          $sql = "SELECT * FROM status";
                          $query = $conn->query($sql);
                          while($frow = $query->fetch_assoc()){
                            echo "
                              <option value='".$frow['id']."'>".$frow['description']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  <label for="edit_address" class="col-sm-3 control-label">Dirección</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" name="address" id="edit_address" required placeholder="Ingrese la dirección del empleado"></textarea>
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="edit_city" class="col-sm-3 control-label">Ciudad</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="city" id="edit_city">
                        <option selected id="cities_val"></option>
                        <?php
                          $sql = "SELECT * FROM cities";
                          $query = $conn->query($sql);
                          while($grow = $query->fetch_assoc()){
                            echo "
                              <option value='".$grow['id']."'>".$grow['description']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  <label for="edit_contact" class="col-sm-3 control-label">Teléfono</label>
                  <div class="col-sm-9"> 
                      <input type="number" class="form-control" id="edit_contact" name="contact" required placeholder="Ingrese el telèfono del empleado">
                  </div>
                </div>
                <div class="form-group">
                  <label for="edit_mail" class="col-sm-3 control-label">Correo</label>
                  <div class="col-sm-9"> 
                      <input type="text" class="form-control" id="edit_mail" name="mail" required placeholder="Ingrese el correo del empleado">
                  </div>
                </div>
                <div class="form-group">
                    <label for="edit_position" class="col-sm-3 control-label">Cargo</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="position" id="edit_position">
                        <option selected id="position_val"></option>
                        <?php
                          $sql = "SELECT * FROM position";
                          $query = $conn->query($sql);
                          while($hrow = $query->fetch_assoc()){
                            echo "
                              <option value='".$hrow['id']."'>".$hrow['description']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                
                <div class="form-group">
                  <label for="photo" class="col-sm-3 control-label">Foto</label>

                  <div class="col-sm-9">
                    <input type="file" name="photo" id="photo">
                  </div>
                </div>
          </div>

          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Actualizar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="document"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_delete.php">
            		<input type="hidden" class="empid" name="id">
            		<div class="text-center">
	                	<p>ELIMINAR EMPLEADO</p>
	                	<h2 class="bold del_employee_name"></h2>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Eliminar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="del_employee_name"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="employee_edit_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="empid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Foto</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Actualizar</button>
              </form>
            </div>
        </div>
    </div>
</div>     