<?php 
include("../conexion.php");
//igualacion de variables//

$cod_categoria=$_POST['cod_categoria'];
$desc_categoria=$_POST['desc_categoria'];


$sql="INSERT into categoria (cod_categoria,desc_categoria) 
VALUES('$cod_categoria','$desc_categoria')";

$resu=mysqli_query($conexion, $sql) or die ($sql . mysqli_error($conexion));

?>
<script>
    alert("Agregado correctamente");
    location.replace("../mantenimientoCategorias.php");
</script>

