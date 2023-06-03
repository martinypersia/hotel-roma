<?php include('header.php'); ?>
<div class="sidebar">
    <header style="display: flex;justify-content: center;">
        <img src="assets/logo.png" alt="logoHotel" width="228px">
    </header>
    <ul>
        <li><a class="nav-link" href="#" style="color: white;"><i class="fa-solid fa-gauge-high"></i>Dashboard</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" style="color: white;">
                <i class="fa-solid fa-bell-concierge"></i>
                Gestión
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Recepción</a>
                <a class="dropdown-item" href="#">Salida</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" style="color: white;">
                <i class="fa-solid fa-wrench"></i>Mantenimiento
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Habitaciones</a>
                <a class="dropdown-item" href="#">Categoria</a>
                <a class="dropdown-item" href="#">Pisos</a>
            </div>
        </li>
        <li><a class="nav-link" href="#" style="color: white;"><i class="fa-solid fa-user"></i>Usuarios</a></i></li>
    </ul>
</div>
<?php include('footer.php'); ?>