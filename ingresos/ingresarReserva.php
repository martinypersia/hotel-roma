<?php 
include("../conexion.php");
//igualacion de variables//

$dni_pasaporte=$POST['dni_pasaporte'];
$nombre=$POST['nombre'];
$apellido=$POST['apellido'];
$fecha_nacimiento=$POST['fecha_nacimiento'];
$direccion=$POST['direccion'];
$patente=$POST['patente'];
$fecha_entrada=$POST['fecha_entrada'];
$fecha_salida=$POST['fecha_salida'];
$precio=$POST['precio'];

$sql="INSERT into venta (dni_pasaporte,nombre,apellido,fecha_nacimiento,
direccion,patente,fecha_entrada,fecha_salida,precio) VALUES('$dni_pasaporte',
'$nombre','$apellido','$fecha_nacimiento','$direccion','$patente','$fecha_entrada','$fecha_salida','$precio')";

$resu=mysqli_query($conexion, $sql) or die ($sql . mysqli_error($conexion));

?>
<script>
    alert("Reserva agregada correctamente");
    location.replace("../gestionRecepcion.php");
</script>