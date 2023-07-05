<?php include('components/header.php'); ?>
<?php include('components/menu.php'); ?>
<?php include('conexion.php'); ?>

<div class="containerGeneral">
    <h2 style="margin-bottom: 60px;">Mantenimiento Habitaciones</h2>

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
            <hr/>
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
                                    <th>Editar</th>
                                </tr>
                            </thead>

                            <tfoot>
                            <?php
                                $sql="SELECT * from habitacion inner join categoria on habitacion.cod_categoria = categoria.cod_categoria";
                                $result=mysqli_query($conexion,$sql);
                                while($mostrar=mysqli_fetch_array($result)){;
                                ?>
                                <tr>
                                    <th><?php echo $mostrar['numhabitacion']?></th>
                                    <th><?php echo $mostrar['nombre_categoria']?></th>
                                    <th><?php echo $mostrar['desc_categoria']?></th>
                                    <th><?php echo $mostrar['piso']?></th>
                                    <th><button type="button" class="btn btn-success" data-toggle="modal" data-target="#editModal"><i class="fa-solid fa-pen"></i></button></th>
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
                                    <label for="txtdescripcion">Numero de habitación</label>
                                    <input type="text" class="form-control required" id="numhabitacion" name="numhabitacion"
                                        autocomplete="off">
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
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" da>Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>








    <div class="modal fade" id="editModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                <form id="formNivel" method="post">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="txtdescripcion">Numero de habitación</label>
                                <select class="form-control" id="habitacion" name="habitacion">
                                    <?php
                                    $sql_habitaciones = "SELECT * FROM habitacion";
                                    $result_habitaciones = mysqli_query($conexion, $sql_habitaciones);
                                    while ($mostrar_habitaciones = mysqli_fetch_array($result_habitaciones)) {
                                        echo '<option value="' . $mostrar_habitaciones['idhabitacion'] . '">' . $mostrar_habitaciones['numhabitacion'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    
   

</div>

<?php include('components/footer.php'); ?>