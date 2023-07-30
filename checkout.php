<?php include('components/header.php'); ?>
<?php include('components/menu.php'); ?>
<?php include('conexion.php'); ?>
<div class="containerGeneral">

    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-danger ">
            <h6 class="m-0 font-weight-bold text-white">Check-out</h6>
        </div>
        <div class="card-body">

        <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="tabla" style="width:100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Datos del cliente</th>
                                    <th></th>
                                
                                </tr>
                            </thead>

                            <tfoot>
                                <?php
                                $id = $_GET["id"];
                                $sql = "SELECT * from habitacion join reserva on habitacion.idhabitacion = reserva.idhabitacion join categoria on categoria.cod_categoria = habitacion.cod_categoria where habitacion.idhabitacion = '$id' ";
                                $result = mysqli_query($conexion, $sql);
                                $mostrar = mysqli_fetch_array($result);
                                ?>
                                    <tr>
                                        <th>Nombre del cliente</th>
                                        <th><?php echo $mostrar['nombre'] ?> <?php echo $mostrar['apellido'] ?>  (DNI o Pasaporte:<?php echo $mostrar['dni_pasaporte']?>)</th>
                                    </tr>
                                    <tr>
                                        <th>Habitación</th>
                                        <th><?php echo $mostrar['numhabitacion'] ?> (<?php echo $mostrar['nombre_categoria']?>) <?php echo $mostrar['desc_categoria']?></th>
                                    </tr>
                                    <tr>
                                        <th>Fecha de entrada</th>
                                        <th><?php echo $mostrar['fecha_entrada']?></th>
                                    </tr>
                                    <tr>
                                        <th>Fecha de salida</th>
                                        <th><?php echo $mostrar['fecha_salida']?></th>
                                    </tr>
                                    <tr>
                                        <th>Precio</th>
                                        <th><?php echo $mostrar['precio']?></th>
                                    </tr>
                            </tfoot>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
            
           <form action="editar/limpiezaHabitacion.php">    
            <button type="submit" class="btn btn-primary" da>Guardar datos del cliente</button>
            
            </script>
            
            
                                
            

                               

                           
                
        </div>
    </div>


</div>
<?php include('components/footer.php'); ?>