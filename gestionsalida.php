<?php include('components/header.php'); ?>
<?php include('components/menu.php'); ?>
<?php include('conexion.php'); ?>
<div class="containerGeneral">

    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary ">
            <h6 class="m-0 font-weight-bold text-white">Lista de habitaciones ocupadas</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#FormModal">
                          nose
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
                                $sql="SELECT * from habitacion inner join categoria on habitacion.cod_categoria = categoria.cod_categoria where codestado = 2";
                                $result=mysqli_query($conexion,$sql);
                                while($mostrar=mysqli_fetch_array($result)){;
                                ?>
                                <tr>
                                    <th><?php echo $mostrar['numhabitacion']?></th>
                                    <th><?php echo $mostrar['nombre_categoria']?></th>
                                    <th><?php echo $mostrar['desc_categoria']?></th>
                                    <th><?php echo $mostrar['piso']?></th>
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
                                    <label for="txtdescripcion">Habitacion:</label>
                                    <select class="form-control" id="numhabitacion" name="numhabitacion">
                                        <?php
                                            $sql_habitacion = "SELECT * FROM habitacion";
                                            $result_habitacion = mysqli_query($conexion, $sql_habitacion);
                                            while ($mostrar_habitacion = mysqli_fetch_array($result_habitacion)) {
                                                echo '<option value="' . $mostrar_habitacion['numhabitacion'] . '">' . $mostrar_habitacion['numhabitacion'] . '</option>';
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
                                    <input type="text" class="form-control required" id="txtdni_pasaporte" name="dni_pasaporte"
                                        autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtdescripcion">Nombre</label>
                                    <input type="text" class="form-control required" id="txtnombre" name="nombre"
                                        autocomplete="off">
                                </div>
                            </div>
                        </div>
                        

                        <div class="modal-footer">
                        </div>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" da>Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



</div>                

<?php include('components/footer.php'); ?>