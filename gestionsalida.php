<?php include('components/header.php'); ?>
<?php include('components/menu.php'); ?>
<?php include('conexion.php'); ?>
<div class="containerGeneral">

    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-danger ">
            <h6 class="m-0 font-weight-bold text-white">Lista de habitaciones ocupadas</h6>
        </div>
        <div class="card-body">

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
                                    <th>Check Out</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <?php
                                $sql = "SELECT * from habitacion inner join categoria on habitacion.cod_categoria = categoria.cod_categoria where codestado = 2";
                                $result = mysqli_query($conexion, $sql);
                                while ($mostrar = mysqli_fetch_array($result)) {;
                                ?>
                                <tr>
                                    <th><?php echo $mostrar['numhabitacion'] ?></th>
                                    <th><?php echo $mostrar['nombre_categoria'] ?></th>
                                    <th><?php echo $mostrar['desc_categoria'] ?></th>
                                    <th><?php echo $mostrar['piso'] ?></th>
                                    <th><a href="checkout.php?id=<?php echo $mostrar['idhabitacion'];?>" ><button type="button" class="btn btn-success"><i class="fa-solid fa-circle-down"></i></button></a></th>

                                </tr>

                                <?php
                                }
                                ?>

                            </tfoot>
                            <tbody></tbody>
                        </table>
                        <?php
                        if (mysqli_num_rows($result) == 0) {
                            echo ' <center><p style="color:red;">No hay habitaciones ocupadas </p></center>';
                        }
                        ?>

                    </div>
                </div>
            </div>

        </div>
    </div>

 
</div>

<?php include('components/footer.php'); ?>