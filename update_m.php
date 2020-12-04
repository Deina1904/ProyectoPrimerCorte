<?php

	$ide=$_REQUEST['id_m'];

    $lugar = $_REQUEST['lugar'];
    $descripcion = $_REQUEST['descripcion'];
    $fecha = $_REQUEST['fecha_m'];

	$conexion=mysqli_connect("localhost","root","","trabajo1") or die (" hubo problemas");
	$consulta="UPDATE mision SET Lugar='$lugar',descripcion='$descripcion',fecha='$fecha' WHERE id_m =$ide";

		mysqli_query($conexion,$consulta) or die ("problemas ".mysqli_error($conexion));
					
		mysqli_close($conexion);

		header("Location: mision.php");
	
 ?>
