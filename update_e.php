<?php

	$ide=$_REQUEST['id_e'];

    $nombree = $_REQUEST['nomb_s'];
    $origen = $_REQUEST['origen'];
    $amenaza = $_REQUEST['nivel_a'];

	$conexion=mysqli_connect("localhost","root","","trabajo1") or die (" hubo problemas");
	$consulta="UPDATE enemigos SET nombre='$nombree',origen='$origen',nivel_a='$amenaza' WHERE id_e =$ide";

		mysqli_query($conexion,$consulta) or die ("problemas ".mysqli_error($conexion));
					
		mysqli_close($conexion);

		header("Location: enemigo.php");
	
 ?>
