<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Zona Admin</title>
        <meta name="viewport" content="width=device-width">

        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet">

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        
        <?php
        include('./funciones.php');
        $conexion = conectaBBDD();        
        $usu = $_SESSION['usuario_sesion'];
        ?>

        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <a class="brand active" href="index.php">SomosHotel</a>
                <ul class="nav">
                    <li><a><?php echo $usu; ?></a></li>
                    <li><a href="gestionUsuarios.php">GESTIÓN EMPLEADOS</a></li>
                    <li><a href="gestionClientes.php">GESTIÓN CLIENTES</a></li>
                    <li><a href="gestionHabitaciones.php">GESTIÓN HABITACIONES</a></li>
                </ul>
            </div>
        </div>

        
        <div class="container-fluid">
            <div class="page-header">
<!--                <h1 id="a">Gestión Empleados <small>Subtext for header</small></h1>-->
            </div>
            <div class="row-fluid" id="divCentral"></div>
        </div>
        
    </body>
</html>





