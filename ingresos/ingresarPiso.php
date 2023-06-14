<?php 
include("../conexion.php");
//igualacion de variables//

$piso=$_POST['piso'];
$descripcion=$_POST['descripcion'];


$sql="INSERT into piso (piso,descripcion) 
VALUES('$piso','$descripcion')";

$resu=mysqli_query($conexion, $sql) or die ($sql . mysqli_error($conexion));

?>
<script>
    alert("Agregado correctamente");
    location.replace("../mantenimientoPisos.php");
</script>

