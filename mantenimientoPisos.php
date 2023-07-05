<?php include('components/header.php'); ?>
<?php include('components/menu.php'); ?>
<?php include('conexion.php'); ?>
<div class="containerGeneral">
    <h2 style="margin-bottom: 60px;">Mantenimiento Pisos</h2>


<div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary">
            <h6 class="m-0 font-weight-bold text-white">Lista de Habitaciones</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#FormModal">
                        Nuevo Piso
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
                                    <th>Piso</th>
                                    <th>Descripción</th>
                                </tr>
                            </thead>

                            <tfoot>
                            <?php
                                $sql="SELECT piso,descripcion from piso";
                                $result=mysqli_query($conexion,$sql);
                                while($mostrar=mysqli_fetch_array($result)){;
                                ?>
                                <tr>
                                    <th><?php echo $mostrar['piso']?></th>
                                    <th><?php echo $mostrar['descripcion']?></th>
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
        <div class="modal fade" id="FormModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Piso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <input id="txtid" type="hidden" value="0" />
                    <form id="formNivel" action="ingresos/ingresarPiso.php" method="post">
                        
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtdescripcion">Piso</label>
                                    <input class="form-control" name="piso" type="text" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="txtdescripcion">Descripción</label>
                                    <input type="text" class="form-control required" id="txttelefono" name="descripcion"
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




<?php include('components/footer.php'); ?>