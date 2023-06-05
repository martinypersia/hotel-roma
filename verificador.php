<?php

if(!empty($_POST["ingresar"])) {
    if (empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo "Los campos estan vacios";
    } else {
        $usuario=$_POST["usuario"];
        $password=$_POST["password"];
        $sql=$conexion->query(" select * from vendedor where idvendedor='$usuario' and contraseña='$password' ");
        if ($datos=$sql->fetch_object()) {
            header("location:inicio.php");
        } else {
            echo "ACCESO DENEGADO";
        }
    }
}

?>