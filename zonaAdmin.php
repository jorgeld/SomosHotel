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
                    <li><a onclick="enlaza(2);" href="#">GESTIÓN EMPLEADOS</a></li>
                    <li><a onclick="enlaza(3);" href="#">GESTIÓN CLIENTES</a></li>
                    <li><a onclick="enlaza(4);" href="#">GESTIÓN HABITACIONES</a></li>
                </ul>
            </div>
        </div>

        
        <div class="container-fluid">
            <div class="page-header">
                <h1 id="a">Gestión Empleados <small>Subtext for header</small></h1>
            </div>
            <div class="row-fluid" id="divCentral"></div>
        </div>


        <script>
            
            function enlaza(_val1){
                switch(_val1){
                    case 1:$('#divCentral').load("#");
                    case 2:$('#divCentral').load("gestionUsuarios.php");$('#a').html("Gestión Empleados");break;
                    case 3:$('#divCentral').load("gestionClientes.php");$('#a').html("Gestión Clientes");break;
                    case 4:$('#divCentral').load("gestionHabitaciones.php");$('#a').html("Gestión Habitaciones");break;
                }
            }
            
        </script>
        
    </body>
</html>





