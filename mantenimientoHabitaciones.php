<?php include('components/header.php'); ?>
<?php include('components/menu.php'); ?>
<?php include('conexion.php'); ?>

<div class="containerGeneral">
    

    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-white">Lista de Habitaciones</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#FormModal">
                        Nueva Habitación
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
                                    <th>Número de habitación</th>
                                    <th>Tipo</th>
                                    <th>Descripcion </th>
                                    <th>Piso</th>
                                    <th>Estado</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <?php
                                $sql = "SELECT * from habitacion inner join categoria on habitacion.cod_categoria = categoria.cod_categoria join estado on habitacion.codestado = estado.codestado";
                                $result = mysqli_query($conexion, $sql);
                                while ($mostrar = mysqli_fetch_array($result)) {;
                                ?>
                                    <tr>
                                        <th><?php echo $mostrar['numhabitacion'] ?></th>
                                        <th><?php echo $mostrar['nombre_categoria'] ?></th>
                                        <th><?php echo $mostrar['desc_categoria'] ?></th>
                                        <th><?php echo $mostrar['piso'] ?></th>
                                        <th><?php echo $mostrar['desc_estado'] ?></th>
                                        <th><button type="button" class="btn btn-success btn-editar" data-idhab="<?php echo $mostrar['idhabitacion']; ?>" data-toggle="modal" data-target="#editModal"><i class="fa-solid fa-pen"></i></button></th>
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
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Nueva Habitación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input id="txtid" type="hidden" value="0" />
                    <form id="formNivel" action="ingresos/ingresarHabitacion.php" method="post">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtnumhabitacion">Número de habitación</label>
                                    <input type="text" class="form-control" id="numhabitacion" name="numhabitacion">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtdescripcion">Tipo</label>
                                    <select class="form-control" id="cod_categoria" name="cod_categoria">
                                        <?php
                                        $sql_categoria = "SELECT * FROM categoria";
                                        $result_categoria = mysqli_query($conexion, $sql_categoria);
                                        while ($mostrar_categoria = mysqli_fetch_array($result_categoria)) {
                                            echo '<option value="' . $mostrar_categoria['cod_categoria'] . '">' . $mostrar_categoria['nombre_categoria'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtnombre">Piso</label>
                                    <select class="form-control" id="piso" name="piso">
                                        <?php
                                        $sql_pisos = "SELECT DISTINCT piso FROM piso";
                                        $result_pisos = mysqli_query($conexion, $sql_pisos);
                                        while ($mostrar_pisos = mysqli_fetch_array($result_pisos)) {
                                            echo '<option value="' . $mostrar_pisos['piso'] . '">' . $mostrar_pisos['piso'] . '</option>';
                                        }
                                        ?>
                                    </select>
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





    <script>
        $(document).ready(function() {
            $('.btn-editar').click(function() {
                var id_hab = $(this).data('idhab');
                var num_hab = $(this).closest('tr').find('th:first-child').text();
                $('#editModal input[name="idhabitacion"]').val(id_hab);
                $('#editModal input[name="txtnumhabitacion"]').val(num_hab);
            });
        });
    </script>


    <div class="modal fade" id="editModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Habitación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input id="txtid" type="hidden" value="0" />
                    <form id="formNivel" method="post" action="editar/editarHabitacion.php">
                        <input type="text" style="display:none;" class="form-control" id="idhabitacion" name="idhabitacion" readonly>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtnumhabitacion">Número de habitación</label>
                                    <input type="text" class="form-control" id="txtnumhabitacion" name="txtnumhabitacion" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txttipo">Tipo</label>
                                    <label for="txtdescripcion">Habitación</label>
                                    <select class="form-control" id="txttipo" name="txttipo">
                                        <?php
                                        $sql_categoria = "SELECT * FROM categoria";
                                        $result_categoria = mysqli_query($conexion, $sql_categoria);
                                        while ($mostrar_categoria = mysqli_fetch_array($result_categoria)) {
                                            echo '<option value="' . $mostrar_categoria['cod_categoria'] . '">' . $mostrar_categoria['nombre_categoria'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtnombre">Piso</label>
                                    <select class="form-control" id="txtpiso" name="txtpiso">
                                        <?php
                                        $sql_pisos = "SELECT DISTINCT piso FROM piso";
                                        $result_pisos = mysqli_query($conexion, $sql_pisos);
                                        while ($mostrar_pisos = mysqli_fetch_array($result_pisos)) {
                                            echo '<option value="' . $mostrar_pisos['piso'] . '">' . $mostrar_pisos['piso'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtnombre">Estado actual:</label>
                                    <select class="form-control" id="txtestado" name="txtestado">
                                        <?php
                                        $sql_estado = "SELECT * FROM estado where desc_estado = 'limpieza' or desc_estado = 'disponible' ";
                                        $result_estado = mysqli_query($conexion, $sql_estado);
                                        while ($mostrar_estado = mysqli_fetch_array($result_estado)) {
                                            echo '<option value="' . $mostrar_estado['codestado'] . '">' . $mostrar_estado['desc_estado'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>



                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





</div>

<?php include('components/footer.php'); ?>