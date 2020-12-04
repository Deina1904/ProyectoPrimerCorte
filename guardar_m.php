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

	$consulta="INSERT INTO mision (id_m,lugar,descripcion,fecha)Values('','$_REQUEST[lugar]','$_REQUEST[descripcion]','$_REQUEST[fecha_m]')";

		mysqli_query($conexion,$consulta) or die ("problemas ".mysqli_error($conexion));
					
        mysqli_close($conexion);
        
        
	header("location: mision.php");
		
 ?>

</body>
</html>