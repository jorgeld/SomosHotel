<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
        <meta name="viewport" content="width=device-width">
        
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
        
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            .centrado{
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
        </style>
        
    </head>
    <body>
        <?php
        include('./funciones.php');
        $conexion = conectaBBDD();               
        ?>
        <div class="container-fluid">
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <a class="brand" href="#">SomosHotel</a>
                <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                </ul>
            </div>
        </div>
        
        
            <div class="hero-unit">
                
                <div class="row-fluid">
                    <div class="span6">
                        <h1>SomosHotel</h1>
                        <p>La forma más sencilla de gestionar tu hotel</p>                   
                    </div>
                    <div class="span6">
                    <form method="post" action="inicio.php">
                        <table>
                            <tr>
                                <td><legend>Usuario:</legend></td>
                                <td><input type="text" class="form-control" name="usuario" placeholder="Usuario"></td>
                            </tr>
                            <tr>
                                <td><legend>Password:</legend></td>  
                                <td><input type="password" class="form-control" name="pass" placeholder="Contraseña"></td>  
                            </tr>
                        </table>
                        
                        <button class="btn btn-primary btn-large" type="submit">Inicio</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
    </body>
</html>
