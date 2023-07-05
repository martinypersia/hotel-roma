<?php include('components/header.php'); ?>
<?php include('components/menu.php'); ?>
<?php include('conexion.php'); ?>
<div class="containerGeneral">

    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary ">
            <h6 class="m-0 font-weight-bold text-white">Lista de clientes</h6>
        </div>
        <div class="card-body">
            <div class="row">
                
              </div>
             <hr />
             <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="tabla" style="width:100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>DNI o Pasaporte</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Dirección</th>
                                    <th>Patente</th>
                                </tr>
                            </thead>

                            <tfoot>
                             <?php
                                $sql="SELECT * from reserva";
                                $result=mysqli_query($conexion,$sql);
                                while($mostrar=mysqli_fetch_array($result)){;
                                ?>
                                <tr>
                                    <th><?php echo $mostrar['dni_pasaporte']?></th>
                                    <th><?php echo $mostrar['nombre']?></th>
                                    <th><?php echo $mostrar['apellido']?></th>
                                    <th><?php echo $mostrar['direccion']?></th>
                                    <th><?php echo $mostrar['patente']?></th>
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



    
</div>



<?php include('components/footer.php'); ?>