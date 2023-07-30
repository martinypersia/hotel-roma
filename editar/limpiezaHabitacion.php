<?php 
include("../conexion.php");


$sql = "UPDATE habitacion SET codestado = 3 WHERE habitacion.idhabitacion = '$id' ";
$result = mysqli_query($conexion, $sql);


if ($result) {
    echo "Cliente registrado!";
    header("Location: ../inicio.php");
    exit();
} else {
    echo "Error al actualizar la habitación: " . mysqli_error($conexion);
}

?>