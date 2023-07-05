<?php 
include("../conexion.php");
//igualacion de variables//

$numhabitacion=$_POST['numhabitacion'];
$piso=$_POST['piso'];
$cod_categoria=$_POST['cod_categoria'];


$sql="INSERT into habitacion (numhabitacion,piso,cod_categoria,codestado) 
VALUES('$numhabitacion','$piso','$cod_categoria',1)";

$resu=mysqli_query($conexion, $sql) or die ($sql . mysqli_error($conexion));

?>
<script>
    alert("Habitacion agregada correctamente");
    location.replace("../mantenimientoHabitaciones.php");
</script>