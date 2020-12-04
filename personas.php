<!DOCTYPE html>
<html>
<head>
  <title>Mundo Capitan America</title>
  <meta charset="utf-8"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>

</head>
<body>
    <div class="jumbotron text-center" style="margin-bottom:50px;margin-top: 50px;margin-right: 50px;margin-left: 50px;">
		<h1>CAPITAN AMERICA</h1>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="margin-right: 50px;margin-left: 50px;">
        <a class="navbar-brand" href="#">Registro Datos Personas Salvadas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio</a>
            </li>
        </div>
    </nav>

    <form  action="guardar_per.php" method="post">
        <div class="jumbotron text-center" style="margin-bottom:0;margin-right: 50px;margin-left: 50px;margin-top: 25px;">
        

            <label style="margin-top: 2%;">Nombre</label>
            <br>
            <input class="form-control" type="Text" placeholder="&#128589 Nombre" name="nomb_s" required style="width: 50%;margin: auto;">
            <br>
            <label for="">Edad</label>
            <br>
            <input class="form-control"type="Text" placeholder=" Edad" name="edad_s" required style="width: 50%;margin: auto;">
            <br>
            <label for="">Lugar de mision</label>
            <br>
            <?php
                $conexion=mysqli_connect("localhost","root","","trabajo1") or die (" hubo problemas");
                    if ($conexion->connect_error) {
                    echo "Error con la conexion";
                    exit(); 
                    }
            ?>

            <div class="form-group">
                <select class="form-control"  name="mision_s" required style="width: 50%;margin: auto;">
                        <option value="">Selecione una opcion</option>
                        <?php
                            $resu = mysqli_query($conexion , "SELECT * from mision");
                            while ($consulta = mysqli_fetch_array($resu)) {						
                        ?>
                        <option value="<?php echo $consulta ['Lugar']; ?>"><?php echo $consulta ['Lugar']; ?></option>
                        <?php 
                            }
                        ?>
                </select>   
            </div>
            <button class="btn btn-info"  type="Submit" name="boton" > Registrar </button>
        </div>
    </form>

    <div class="jumbotron text-center" style="margin-bottom:0;margin-right: 50px;margin-left: 50px;margin-top: 25px;">        
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                            <h2>Personas Salvadas</h2>
                            <thead class="text-center">
                                    <th>AI</th>
                                    <th>Nombre</th>
                                    <th>Edad</th>
                                    <th>Lugar de mision</th>
                                    <th colspan="2">Acciones</th> 
                            </thead>
                            <tbody>
                                <?php
                                    $conexion=mysqli_connect("localhost","root","","trabajo1") or die (" hubo problemas");
                                        if ($conexion->connect_error) {
                                            echo "Error con la conexion";
                                            exit(); 
                                        }
                                        session_start();
                                    $resu = mysqli_query($conexion , "SELECT * from personas_s");
                                        while ($consulta = mysqli_fetch_array($resu)) {
                                ?>
                                <tr>                  
                                    <td><?php echo $consulta ['id_ps']?></td>
                                    <td><?php echo $consulta ['nombre']?></td>
                                    <td><?php echo $consulta ['edad']?></td>
                                    <td><?php echo $consulta ['mision_s']?></td>
                                    <td><a id="alink" href="f_mod_ps.php?id_ps=<?php echo $consulta ['id_ps'] ?>">Modificar</a></td> 
                                    <td><a id="alink" href="eli_ps.php?id_ps=<?php echo $consulta ['id_ps'] ?>">Eliminar</a></td> 
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