<meta charset="UTF-8">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
        
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php

include './funciones.php';
$conexion = conectaBBDD();

$idBuscador = $_POST["idBuscador"];

$usu = $conexion->query("SELECT * FROM empleados WHERE ID = '$idBuscador'");
$fila = $usu->fetch_assoc();
    $nom =$fila["Nombre"];
    $ape =$fila["Apellidos"];
    $pue =$fila["Puesto"];
    $con =$fila["Contraseña"];
    $i =$fila["ID"];

echo '<legend>Modificación de Usuario</legend>';
echo '<form method="post">';
echo '<label>ID:</label><input type="text" class="form-control" id="i" value="'.$i.'">';
echo '<label>Nombre:</label><input type="text" class="form-control" id="nombre" value="'.$nom.'">';
echo '<label>Apellidos:</label><input type="text" class="form-control" id="apellidos" value="'.$ape.'">';
echo '<label>Puesto:</label><input type="text" class="form-control" id="puesto" value="'.$pue.'">';
echo '<label>Contraseña:</label><input type="text" class="form-control" id="pass" value="'.$con.'"> ';
echo '</form>';
echo '<button type="submit" class="btn btn-primary" id="bm">Modificar Usuario</button> ';
echo '<div id="divdondecarga"></div> ';


?>

<script>
    $(document).ready(function(){
    $('#bm').on('click',function(){
        var _id = $('#i').val();
        var _nombre = $('#nombre').val();
        var _apellidos = $('#apellidos').val();
        var _puesto = $('#puesto').val();
        var _pass = $('#pass').val();
        
        $('#divdondecarga').load('modificacionUsuario.php',{
           
           id:_id,
           nombre: _nombre,
           apellidos:_apellidos,
           puesto:_puesto,
           pass:_pass
        });
    });
    });
</script>

