<?php 
include("../conexion.php");
//igualacion de variables//

$nombre_categoria=$_POST['nombre_categoria'];
$desc_categoria=$_POST['desc_categoria'];


$sql="INSERT into categoria (nombre_categoria,desc_categoria) 
VALUES('$nombre_categoria','$desc_categoria')";

$resu=mysqli_query($conexion, $sql) or die ($sql . mysqli_error($conexion));

?>
<script>
    alert("Agregado correctamente");
    location.replace("../mantenimientoCategorias.php");
</script>

