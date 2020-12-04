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

	$consulta="INSERT INTO personas_s (id_ps,nombre,edad,mision_s)Values('','$_REQUEST[nomb_s]','$_REQUEST[edad_s]','$_REQUEST[mision_s]')";

		mysqli_query($conexion,$consulta) or die ("problemas ".mysqli_error($conexion));
					
		mysqli_close($conexion);
		header("location: personas.php");
		
 ?>

</body>
</html>