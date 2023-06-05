<?php 
include("conexion.php");
//igualacion de variables//

$documento=$_POST['idvendedor'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$contraseña=$_POST['password'];

$sql="INSERT into vendedor (idvendedor,nombre,apellido,direccion,telefono,password) 
VALUES('$documento','$nombre','$apellido','$direccion','$telefono','$contraseña')";

$resu=mysqli_query($conexion, $sql) or die ($sql . mysqli_error($conexion));

?>
<script>
    alert("Agregado correctamente");
    location.replace("usuarios.php");
</script>