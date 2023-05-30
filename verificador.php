<?php
if(!empty($_POST["ingresar"])){
    if (empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo "LOS CAMPOS ESTAN VACIOS";
    }else{
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["password"];
        $sql = $conexion->query("select from vendedor ");
    }
}

?>