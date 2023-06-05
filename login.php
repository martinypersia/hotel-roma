<?php include('components/header.php'); ?>
    <center>
<?php
	include("conexion.php");
	include("verificador.php");
?>	

	<br><br>
	<br><br>
	
	<div class="login">
    <h2>Inicio de sesión</h2>
    <form action="" method="post">
	Nro Documento
      <input type="text" name="usuario" id="usuario" class="input">
      <br>
	Contraseña
      <input type="password" name="password" id="input" class="input">
      <br>
	  <?php
include("verificador.php");
?>	
<br>
      <input type="submit" name="ingresar" value="Iniciar sesión">
    </form>
  </div>
  
    
	<?php include('components/footer.php'); ?>