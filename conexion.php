
<?php
session_start();
if(isset($_SESSION['usuario'])){
    header("location:inicio.php");
}
$conexion = mysqli_connect("localhost","root","","hotel");
$conexion-> set_charset("UTF8");
?>