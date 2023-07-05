<?php 
include("../conexion.php");
//igualacion de variables//

$dni_pasaporte=$_POST['dni_pasaporte'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$patente=$_POST['patente'];
$fecha_entrada=$_POST['fecha_entrada'];
$fecha_salida=$_POST['fecha_salida'];
$precio=$_POST['precio'];
$idvendedor=$_POST['idvendedor'];
$idhabitacion=$_POST['idhabitacion'];


$sql="INSERT into reserva (dni_pasaporte,nombre,apellido,
direccion,patente,fecha_entrada,fecha_salida,precio,idvendedor,idhabitacion) VALUES('$dni_pasaporte',
'$nombre','$apellido','$direccion','$patente','$fecha_entrada','$fecha_salida','$precio','$idvendedor','$idhabitacion')";


$resu=mysqli_query($conexion, $sql) or die ($sql . mysqli_error($conexion));

?>
<script>
    alert("Reserva agregada correctamente");
    location.replace("../gestionRecepcion.php");
</script>