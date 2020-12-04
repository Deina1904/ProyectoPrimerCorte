<!DOCTYPE html>
<html>
<head>
	<title>Saves</title>
</head>
<body>
	<meta charset="UTF-8">
	<link rel="stylesheet"  href="style.css">

<?php
	
	$conexion=mysqli_connect("localhost","root","","trabajo1") or die (" hubo problemas");

	$consulta="INSERT INTO personas_s (nombre,edad)Values('$_REQUEST[nomb_s]','$_REQUEST[edad_s]')";

		mysqli_query($conexion,$consulta) or die ("problemas ".mysqli_error($conexion));
					
		mysqli_close($conexion);
	header("location: enemigo.php");
		
 ?>

</body>
</html>