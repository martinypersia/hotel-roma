<?php

if(!empty($_POST["ingresar"])) {
    if (empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo "Los campos estan vacios";
    } else {
        $usuario=$_POST["usuario"];
        $password=$_POST["password"];
        $sql=$conexion->query("select * from vendedor where idvendedor='$usuario' and contrasena='$password' ");
        if(!isset($_SESSION['usuario'])){
            if ($datos=$sql->fetch_object()) {
                $_SESSION['usuario'] = $usuario;
                header("location:inicio.php");
            } else {
                echo "ACCESO DENEGADO";
            }
        }
    }
}

?>