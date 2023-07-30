<?php
include("../conexion.php");
$idhabitacion = $_POST['idhabitacion'];
$tipo = $_POST['txttipo'];
$piso = $_POST['txtpiso'];
$estado = $_POST['txtestado'];
$sql = "UPDATE habitacion SET cod_categoria = '$tipo', piso = '$piso', codestado = '$estado'  WHERE idhabitacion = '$idhabitacion'";
$result = mysqli_query($conexion, $sql);
if ($result) {
    echo "La habitación se actualizó correctamente";
    header("Location: ../mantenimientoHabitaciones.php");
    exit();
} else {
    echo "Error al actualizar la habitación: " . mysqli_error($conexion);
}
?>
