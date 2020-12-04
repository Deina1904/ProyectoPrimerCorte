<?php
    // Conexion con la base de datos y el servidor
    print "hi";

    $con = mysqli_connect('localhost','root','','trabajo1');

    // obtener los datos del formulario 
    $nombre = $_POST['nombrepatro'];
    $documento = $_POST['docpatro'];
    $nombreGrupo = $_POST['namegrupo'];

    $sqlTabla = "INSERT into patrocinadores (IdPatrocinador,Nombre,NoIdentificacion,NombreGrupo) 
                                    VALUES  ('','$nombre','$documento','$nombreGrupo')";

    $ejecutar = mysqli_query($con,$sqlTabla);
    
    if($ejecutar == 1){
        echo "Registro Exitoso";
    }
    


?>