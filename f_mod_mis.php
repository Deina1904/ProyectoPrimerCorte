<!DOCTYPE html>
<html>
<head>
    <title> Mundo Capitan America </title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type"> <meta content="utf-8" http-equiv="encoding">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" 
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>  
</head>
<body>
    <div class="jumbotron text-center" style="margin-bottom:50px;margin-top: 50px;margin-right: 50px;margin-left: 50px;">
        <h1>Patrociandores</h1> 
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="margin-right: 50px;margin-left: 50px;">
        <a class="navbar-brand" href="#">Modificar Personas Salvadas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav> 

    <?php
        $ide=$_REQUEST['id_m'];
        $value = " Actual";  
		$conexionn=mysqli_connect("localhost","root","","trabajo1") or die (" hubo problemas");
			if ($conexionn->connect_error) {
				echo "Error";
				exit();
            }
		$resu = mysqli_query($conexionn,"SELECT * FROM mision WHERE id_m= '$ide'");
		$consulta = mysqli_fetch_array($resu); 
	?> 
    <form  action="update_m.php?id_m=<?php echo $consulta ['id_m']; ?>" method="post">
        <div class="jumbotron text-center" style="margin-bottom:0;margin-right: 50px;margin-left: 50px;margin-top: 25px;">
            <h2>Registrar Mision</h2>
            <br>
            <label style="margin-top: 2%;" for="nomb_s">Lugar</label> 
            <br>
            <input class="form-control text-center" type="Text" placeholder="Ej: New York, Londres " name="lugar" value="<?php echo $consulta['Lugar'];?>" required style="width: 50%;margin: auto;">
            <br>
            <label for="nomb_s">Descripcion</label>
            <br>
            <textarea class="form-control" rowns= "10" type="Text" placeholder="Descripcion de la mision" name="descripcion"required style="width: 50%;margin: auto;"><?php echo $consulta['descripcion'];?></textarea>
            <br>
            <label for="nomb_s">Fecha</label>
            <br>
            <input class="form-control" type="date" placeholder="formato" name="fecha_m" value="<?php echo $consulta['fecha'];?>" required style="width: 50%;margin: auto;">
            <br>
            <button class="btn btn-info"  type="Submit" name="boton" > Modificar mision </button>
        </div>
    </form>

    <div class="jumbotron text-center" style="margin-bottom:0;margin-right: 50px;margin-left: 50px;margin-top: 25px;">        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                        <h2>Misiones registradas</h2>
                        <thead class="text-center">
                            <th>AI</th>
                            <th>Lugar</th>
                            <th>Descripcion</th>
                            <th> Fecha </th>
                            <th colspan="1">Acciones</th>  
                        </thead>
                        <tbody>
                            <?php
                                $conexion=mysqli_connect("localhost","root","","trabajo1") or die (" hubo problemas");
                                    if ($conexion->connect_error) {
                                        echo "Error con la conexion";
                                        exit(); 
                                    }
                                    session_start();
                                $resu = mysqli_query($conexion , "SELECT * from mision");
                                while ($consulta = mysqli_fetch_array($resu)) {                            
                            ?>
                            <tr>                  
                                <td><?php echo $consulta ['id_m']?></td>
                                <td><?php echo $consulta ['Lugar']?></td>
                                <td><?php echo $consulta ['descripcion']?></td>
                                <td><?php echo $consulta ['fecha']?></td>
                                <td><a id="alink" href="eli_m.php?id_m=<?php echo $consulta ['id_m'] ?>">Eliminar</a></td> 
                            </tr>            
                            <?php 
                            }
                            ?>            
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html> 
