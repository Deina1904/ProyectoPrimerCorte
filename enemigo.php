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
    <!-- p  parrafo--> 
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="margin-right: 50px;margin-left: 50px;">
        <a class="navbar-brand" href="#">Registro Enemigos</a>
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

    <form  action="guardar_e.php" method="post">
        <div class="jumbotron text-center" style="margin-bottom:0;margin-right: 50px;margin-left: 50px;margin-top: 25px;">
           
            <label style="margin-top: 2%;"> Nombre Completo </label>
            <br>
            <input class="form-control" type="Text" placeholder="&#128589 Nombre" name="nomb_s" required style="width: 50%;margin: auto;">
            <br>
            <label> N° Documento </label>
            <br>
            <input class="form-control" type="number" placeholder="Origen" name="origen" required style="width: 50%;margin: auto;">
            <br>
            

            <div class="form-group">
                <label for="sel1"> Nivel de amenaza</label>
                <select class="form-control"  name="nivel_a" required style="width: 50%;margin: auto;">
                    <option value="">Selecione una opcion</option>
                    <option value="Media">Es un pete</option>
                    <option value="Normal">Normal</option>
                    <option value="Alta">Alta</option>
                </select>   
            </div>
        
            <button class="btn btn-info"  type="Submit" name="boton" > Ingresar nuevo </button>
    
        </div>   
    </form>

    <div class="jumbotron text-center" style="margin-bottom:0;margin-right: 50px;margin-left: 50px;margin-top: 25px;">        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                        <h2>Enemigos registrados</h2>	
                            <thead class="text-center">
                                    <th>AI</th>
                                    <th>Nombre</th>
                                    <th>Origen</th>
                                    <th>Nivel de amenaza</th>
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
                                    $resu = mysqli_query($conexion , "SELECT * from enemigos");
                                        while ($consulta = mysqli_fetch_array($resu)) {
                                ?>
                                <tr>                  
                                    <td ><?php echo $consulta ['id_e']?></td>
                                    <td ><?php echo $consulta ['nombre']?></td>
                                    <td ><?php echo $consulta ['origen']?></td>
                                    <td ><?php echo $consulta ['nivel_a']?></td>
                                    <td><a id="alink" href="f_mod_ene.php?id_e=<?php echo $consulta ['id_e'] ?>">Modificar</a></td> 
                                    <td><a id="alink" href="eli_e.php?id_e=<?php echo $consulta ['id_e'] ?>">Eliminar</a></td> 
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