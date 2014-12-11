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
        
        <div class="container-fluid">

<?php 
        include('funciones.php');
        $conexion = conectaBBDD();
        
        $consulta = $conexion->query("SELECT * FROM habitaciones");
        $consulta2 = $conexion->query("SELECT * FROM habitaciones WHERE Estado ='LIMPIA'");
                
?>

<div>
    <legend>HABITACIONES</legend>
    <table>
        <tr>
            <td>
                <select name="hb">
                    <?php
                        while($fila = $consulta->fetch_assoc()){
                            echo '<option>'.$fila['Numero'].'</option>';
                        }
                    ?>
                </select>
            </td>
        </tr>
    </table>
</div>

<div>
    <legend>HABITACIONES LIMPIAS</legend>
    <table>
        <tr>
            <td>
                <select name="hb">
                    <?php
                        while($fila = $consulta2->fetch_assoc()){
                            echo '<option>'.$fila['Numero'].'</option>';
                        }
                    ?>
                </select>
            </td>
        </tr>
    </table>
</div>  
        </div>
    </body>
</html>

