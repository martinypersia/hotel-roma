<?php include('components/header.php'); ?>
<?php include('components/menu.php'); ?>
<div class="containerGeneral">
    <h2 style="margin-bottom: 60px;">Dashboard</h2>
    <div class="row" >
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-dark shadow h-100 py-2" style="max-width: 316px;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div clas       s="text-xs font-weight-bold text-dark text-uppercase mb-1">
                            Total Habitaciones
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-dark" id="totalhabitaciones">0</div>
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
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Habitaciones Disponibles
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-primary" id="habitacionesdisponibles">0</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-box fa-2x text-primary"></i>
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
                        <div class="h5 mb-0 font-weight-bold text-danger" id="habitacionesocupadas">0</div>
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
                        <div class="h5 mb-0 font-weight-bold text-info" id="habitacioneslimpieza">0</div>
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