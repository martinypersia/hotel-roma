<?php include('components/header.php'); ?>
<?php include('components/menu.php'); ?>
<?php include('conexion.php');?>
<div class="containerGeneral">
    <h2 style="margin-bottom: 60px;">Usuarios</h2>
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-white">Lista de Usuarios</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#FormModal">
                        Crear nuevo Usuario
                    </button>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="tabla" style="width:100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nro Documento</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Dirección</th>
                                    <th>Telefono</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <?php
                                $sql="SELECT * from vendedor";
                                $result=mysqli_query($conexion,$sql);
                                while($mostrar=mysqli_fetch_array($result)){;
                                ?>
                                <tr>
                                    <th><?php echo $mostrar['idvendedor'] ?></th>
                                    <th><?php echo $mostrar['nombre'] ?></th>
                                    <th><?php echo $mostrar['apellido'] ?></th>
                                    <th><?php echo $mostrar['direccion'] ?></th>
                                    <th><?php echo $mostrar['telefono'] ?></th>
                                </tr>
                                <?php
                                }
                                ?>

                            </tfoot>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="FormModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input id="txtid" type="hidden" value="0" />
                    <form id="formNivel" action="ingresos/ingresarUsuario.php" method="post">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtdescripcion">Nro Documento:</label>
                                    <input type="text" class="form-control required" id="txtdocumento" name="documento"
                                        autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtdescripcion">Nombre:</label>
                                    <input type="text" class="form-control required" id="txtnombre" name="nombre"
                                        autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtdescripcion">Apellido:</label>
                                    <input type="text" class="form-control required" id="txtapellido" name="apellido"
                                        autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtdescripcion">Dirección:</label>
                                    <input type="text" class="form-control required" id="txtdireccion" name="direccion"
                                        autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtdescripcion">Telefono:</label>
                                    <input type="text" class="form-control required" id="txttelefono" name="telefono"
                                        autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtdescripcion">Contraseña:</label>
                                    <input type="password" class="form-control required" id="txtpassword"
                                        name="password" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">

                        </div>
                        <button type="submit" class="btn btn-primary" da>Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include('components/footer.php'); ?>