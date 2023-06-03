<?php include('header.php'); ?>
<div class="sidebar">
    <header style="display: flex;justify-content: center;">
        <img src="assets/logo.png" alt="logoHotel" width="228px">
    </header>
    <ul>
        <li><a class="nav-link" href="inicio.php" style="color: white;"><i
                    class="fa-solid fa-gauge-high"></i>Dashboard</a></li>
        <div class="dropdown nav-link" style="margin-bottom: 5px;">
            <a style="color:white;"><i class="fa-solid fa-bell-concierge"></i>Gestión</a>
            <div class="dropdown-content">
                <a href="gestion.php">Recepción</a>
                <a href="gestion.php">Salida</a>
            </div>
        </div>
        <div class="dropdown nav-link">
            <a style="color:white;"><i class="fa-solid fa-wrench"></i>Mantenimiento</a>
            <div class="dropdown-content">
                <a href="mantenimiento.php">Habitaciones</a>
                <a href="mantenimiento.php">Categoria</a>
                <a href="mantenimiento.php">Pisos</a>
            </div>
        </div>
        <li><a class="nav-link" href="usuarios.php" style="color: white;"><i
                    class="fa-solid fa-user"></i>Usuarios</a></i></li>
    </ul>
</div>
<?php include('footer.php'); ?>