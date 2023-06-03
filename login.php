<?php include('header.php'); ?>
    <center>
<h1>Inicio de Sesión</h1>

<?php
	include("conexion.php");
	include("verificador.php");
	?>	

	<form action="" method="post">
		<label for="username">Nombre de usuario:</label>
		<input type="text" id="username" name="usuario"><br><br>
		<label for="password">Contraseña:</label>
		<input type="password" id="password" name="password"><br><br>
		<input name="ingresar" type="submit" value="Ingresar">
	</form>
  
    
	<?php include('footer.php'); ?>