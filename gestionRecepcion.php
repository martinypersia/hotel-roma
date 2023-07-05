<?php include('components/header.php'); ?>
<?php include('components/menu.php'); ?>
<?php include('conexion.php'); ?>
<div class="containerGeneral">

    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-success ">
            <h6 class="m-0 font-weight-bold text-white">Lista de habitaciones Disponibles</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#FormModal">
                        Registrar reserva
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
                                    <th>Numero de habitacion</th>
                                    <th>Tipo</th>
                                    <th>Descripcion</th>
                                    <th>Piso</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <?php
                                $sql = "SELECT * from habitacion inner join categoria on habitacion.cod_categoria = categoria.cod_categoria where codestado = 1";
                                $result = mysqli_query($conexion, $sql);
                                while ($mostrar = mysqli_fetch_array($result)) {;
                                ?>
                                    <tr>
                                        <th><?php echo $mostrar['numhabitacion'] ?></th>
                                        <th><?php echo $mostrar['nombre_categoria'] ?></th>
                                        <th><?php echo $mostrar['desc_categoria'] ?></th>
                                        <th><?php echo $mostrar['piso'] ?></th>
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
    <div class="modal fade" id="FormModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-center modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Ingresar datos del cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input id="txtid" type="hidden" value="0" />
                    <form id="formNivel" action="ingresos/ingresarReserva.php" method="post">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtdescripcion">Empleado:</label>
                                    <select class="form-control" id="idvendedor" name="idvendedor">
                                        <?php
                                        $sql_habitacion = "SELECT * FROM vendedor";
                                        $result_habitacion = mysqli_query($conexion, $sql_habitacion);
                                        while ($mostrar_habitacion = mysqli_fetch_array($result_habitacion)) {
                                            echo '<option value="' . $mostrar_habitacion['idvendedor'] . '">' . $mostrar_habitacion['apellido'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtdescripcion">Habitacion:</label>
                                    <select class="form-control" id="idhabitacion" name="idhabitacion">
                                        <?php
                                        $sql_habitacion = "SELECT * FROM habitacion where codestado = 1";
                                        $result_habitacion = mysqli_query($conexion, $sql_habitacion);
                                        if (mysqli_num_rows($result_habitacion) == 0) {
                                            echo '<option style="color:red;">No hay habitaciones disponibles </option>';
                                        } else {
                                            while ($mostrar_habitacion = mysqli_fetch_array($result_habitacion)) {
                                                echo '<option value="' . $mostrar_habitacion['idhabitacion'] . '">' . $mostrar_habitacion['numhabitacion'] . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtdescripcion">Documento o Pasaporte:</label>
                                    <input type="text" class="form-control required" id="txtdni_pasaporte" name="dni_pasaporte" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtdescripcion">Nombre</label>
                                    <input type="text" class="form-control required" id="txtnombre" name="nombre" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtdescripcion">Apellido:</label>
                                    <input type="text" class="form-control required" id="txtapellido" name="apellido" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtdescripcion">Dirección:</label>
                                    <input type="text" class="form-control required" id="txtdireccion" name="direccion" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtdescripcion">Patente:</label>
                                    <input type="text" class="form-control required" id="txtpatente" name="patente" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtdescripcion">Fecha de entrada:</label>
                                    <input type="date" class="form-control required" id="txtfecha_entrada" name="fecha_entrada" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtdescripcion">Fecha de salida:</label>
                                    <input type="date" class="form-control required" id="txtfecha_salida" name="fecha_salida" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtdescripcion">Precio</label>
                                    <input type="text" class="form-control required" id="txtprecio" name="precio" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                        </div>
                        <?php
                        if (mysqli_num_rows($result_habitacion) == 0) {
                            echo '<p style="color:red;">No hay habitaciones disponibles </p>';
                        } else {
                            echo '<button type="submit" class="btn btn-primary">Guardar</button>';
                        }
                        ?>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






</div>

<?php include('components/footer.php'); ?>