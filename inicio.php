<?php include('components/header.php'); ?>
<?php include('components/menu.php'); ?>

<div class=" containerGeneral">
    <div class="panel-control">
    <h2 style="margin-bottom: 60px;">Panel de Control</h2>
    </div>
<br>   
    
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-dark shadow h-100 py-2" style="max-width: 316px;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div clas s="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                Total Habitaciones
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-dark" id="totalhabitaciones">
                                <?php 
$dash_total_query = "SELECT * from habitacion";
$conexion = mysqli_connect("localhost","root","","hotel");
$conexion-> set_charset("UTF8");
$dash_total_query_run = mysqli_query($conexion, $dash_total_query);

 if($total = mysqli_num_rows($dash_total_query_run)){
    echo '<h4 class="mb-0"> '.$total.'</h4>';
 }else{
    echo '<h4 class="mb-0"> 0 </h4>';

 }
?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-black-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2" style="max-width: 316px;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Habitaciones Disponibles
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-success" id="habitacionesdisponibles">
                                <?php 
$dash_disponibles_query = "SELECT * from habitacion where codestado = '1' ";
$dash_disponibles_query_run = mysqli_query($conexion, $dash_disponibles_query);

 if($disponibles = mysqli_num_rows($dash_disponibles_query_run)){
    echo '<h4 class="mb-0"> '.$disponibles.'</h4>';
 }else{
    echo '<h4 class="mb-0"> 0 </h4>';

 }
?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-box fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2" style="max-width: 316px;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Habitaciones Ocupadas
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-danger" id="habitacionesocupadas">
                                <?php 
$dash_ocupadas_query = "SELECT * from habitacion where codestado = '2' ";
$dash_ocupadas_query_run = mysqli_query($conexion, $dash_ocupadas_query);

 if($ocupadas = mysqli_num_rows($dash_ocupadas_query_run)){
    echo '<h4 class="mb-0"> '.$ocupadas.'</h4>';
 }else{
    echo '<h4 class="mb-0"> 0 </h4>';

 }
?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-bed fa-2x text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2" style="max-width: 316px;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Habitaciones en Limpieza
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-info" id="habitacioneslimpieza">
                                <?php 
$dash_limpieza_query = "SELECT * from habitacion where codestado = '3' ";
$dash_limpieza_query_run = mysqli_query($conexion, $dash_limpieza_query);

 if($limpieza = mysqli_num_rows($dash_limpieza_query_run)){
    echo '<h4 class="mb-0"> '.$limpieza.'</h4>';
 }else{
    echo '<h4 class="mb-0"> 0 </h4>';

 }
?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-air-freshener fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    


</div>




<?php include('components/footer.php'); ?>